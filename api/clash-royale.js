// Vercel Serverless Function - Proxy para API do Clash Royale
// Resolve problemas de CORS fazendo requisições do servidor

const API_KEY = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiIsImtpZCI6IjI4YTMxOGY3LTAwMDAtYTFlYi03ZmExLTJjNzQzM2M2Y2NhNSJ9.eyJpc3MiOiJzdXBlcmNlbGwiLCJhdWQiOiJzdXBlcmNlbGw6Z2FtZWFwaSIsImp0aSI6IjQ3NDZkZGFhLTM2MDYtNDJiNC05ZTcyLWQzNTUwNTVjZWY0NSIsImlhdCI6MTc2MzU5ODE3MCwic3ViIjoiZGV2ZWxvcGVyLzI3YWFkZGZiLWY2NWItYTY3YS0yMjA5LTFjODViMTM1MGFhMCIsInNjb3BlcyI6WyJyb3lhbGUiXSwibGltaXRzIjpbeyJ0aWVyIjoiZGV2ZWxvcGVyL3NpbHZlciIsInR5cGUiOiJ0aHJvdHRsaW5nIn0seyJjaWRycyI6WyIxMDMuMjEwLjc4LjI1MCJdLCJ0eXBlIjoiY2xpZW50In1dfQ.APCGXIcJ-3BaYM4QPlda7WNOJFDyprUOqF5HFjaXVhSoORfFuRn6VJ7NGjij9a8Vwfrv9BfDcZ3MZ2R5zfu0NQ';

export default async function handler(req, res) {
    // Permitir CORS
    res.setHeader('Access-Control-Allow-Origin', '*');
    res.setHeader('Access-Control-Allow-Methods', 'GET, POST, OPTIONS');
    res.setHeader('Access-Control-Allow-Headers', 'Content-Type');

    // Handle preflight requests
    if (req.method === 'OPTIONS') {
        return res.status(200).end();
    }

    // Verificar se o método é GET ou POST
    if (req.method !== 'GET' && req.method !== 'POST') {
        return res.status(405).json({
            error: 'Method not allowed',
            reason: 'methodNotAllowed',
            message: 'Only GET and POST methods are allowed'
        });
    }

    // Obter a tag do jogador
    const playerTag = req.method === 'GET' 
        ? req.query.player_tag 
        : req.body?.player_tag || req.body?.playerTag;

    if (!playerTag) {
        return res.status(400).json({
            error: 'Player tag is required',
            reason: 'missingParameter',
            message: 'Player tag must be provided as query parameter (player_tag) or in request body'
        });
    }

    // Limpar e validar a tag
    let cleanTag = String(playerTag).trim().replace(/^#/, '').toUpperCase();
    
    // Validação: apenas letras e números
    if (!/^[A-Z0-9]+$/.test(cleanTag)) {
        return res.status(400).json({
            error: 'Invalid player tag format',
            reason: 'invalidTag',
            message: 'Player tag must contain only letters and numbers'
        });
    }

    // Formatar tag com #
    const formattedTag = '#' + cleanTag;
    const encodedTag = encodeURIComponent(formattedTag);

    // URL da API do Clash Royale
    const apiUrl = `https://api.clashroyale.com/v1/players/${encodedTag}`;

    try {
        // Fazer requisição para a API do Clash Royale
        const response = await fetch(apiUrl, {
            method: 'GET',
            headers: {
                'Authorization': `Bearer ${API_KEY}`,
                'Accept': 'application/json'
            }
        });

        // Obter dados da resposta
        const data = await response.text();
        let jsonData;
        
        try {
            jsonData = JSON.parse(data);
        } catch (e) {
            jsonData = { message: data };
        }

        // Se a resposta não foi OK, retornar erro
        if (!response.ok) {
            if (response.status === 404) {
                return res.status(404).json({
                    error: 'Player not found',
                    reason: 'notFound',
                    message: 'The player tag does not exist'
                });
            }
            
            if (response.status === 403) {
                return res.status(403).json({
                    error: 'Forbidden',
                    reason: 'invalidApiKey',
                    message: 'Invalid API key or API key expired'
                });
            }

            if (response.status === 429) {
                return res.status(429).json({
                    error: 'Rate limit exceeded',
                    reason: 'rateLimit',
                    message: 'Too many requests. Please wait a few minutes.'
                });
            }

            return res.status(response.status).json({
                error: 'API error',
                reason: jsonData.reason || 'unknown',
                message: jsonData.message || 'Unknown error occurred'
            });
        }

        // Retornar dados do jogador
        return res.status(200).json(jsonData);

    } catch (error) {
        console.error('Error fetching player data:', error);
        return res.status(500).json({
            error: 'Internal server error',
            reason: 'serverError',
            message: error.message || 'Failed to fetch player data'
        });
    }
}

