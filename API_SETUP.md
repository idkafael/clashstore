# Configuração da API do Clash Royale

## ✅ Agora funciona SEM servidor PHP!

O código foi atualizado para funcionar diretamente no navegador, sem precisar de servidor PHP!

## Como obter sua chave de API

1. Acesse o site oficial da Supercell Developer: https://developer.clashroyale.com/
2. Faça login com sua conta Supercell (ou crie uma se não tiver)
3. Vá para a seção "My Account" ou "API Keys"
4. Crie uma nova chave de API (API Key)
5. Copie a chave gerada

## Configuração (Método JavaScript - Recomendado)

1. Abra o arquivo `index.html` no navegador
2. Abra o Console do Navegador (pressione F12)
3. Digite o seguinte comando no console:
   ```javascript
   localStorage.setItem('clashRoyaleApiKey', 'SUA_CHAVE_AQUI')
   ```
4. Substitua `SUA_CHAVE_AQUI` pela sua chave de API real
5. Recarregue a página (F5)
6. Pronto! Agora você pode pesquisar tags de jogadores

## Configuração Alternativa (Método PHP)

Se preferir usar o método PHP (requer servidor):

1. Abra o arquivo `fuck.php`
2. Localize a linha:
   ```php
   $apiKey = 'YOUR_API_KEY_HERE';
   ```
3. Substitua `YOUR_API_KEY_HERE` pela sua chave de API real

## Endpoint da API

A API oficial do Clash Royale está disponível em:
- **Base URL**: `https://api.clashroyale.com/v1/`
- **Endpoint de Player**: `GET /players/{playerTag}`

## Formato da Tag do Jogador

- A tag do jogador deve começar com `#`
- Exemplo: `#ABC123`
- A tag será automaticamente convertida para maiúsculas e URL-encoded na requisição

## Resposta da API

A API retorna informações completas do jogador, incluindo:
- Nome do jogador (`name`)
- Tag do jogador (`tag`)
- Nível de experiência (`expLevel`)
- Troféus (`trophies`)
- Arena atual (`arena`)
- Clã (`clan`)
- Carta favorita (`currentFavouriteCard`)
- E muito mais...

## Limitações da API

- A API tem limites de rate limiting (geralmente 1000 requisições por hora)
- Você precisa de uma chave de API válida
- A tag do jogador deve existir no jogo

## Exemplo de Uso

```javascript
$.ajax({
    url: 'fuck.php',
    type: 'POST',
    data: {
        player_tag: '#ABC123'
    },
    dataType: 'json',
    success: function(response) {
        console.log(response.name); // Nome do jogador
        console.log(response.trophies); // Troféus
        console.log(response.clan.name); // Nome do clã
    }
});
```

## Troubleshooting

### Erro 403 (Forbidden)
- Verifique se sua chave de API está correta
- Verifique se sua chave de API não expirou
- Certifique-se de que copiou a chave completa

### Erro 404 (Not Found)
- Verifique se a tag do jogador está correta
- Certifique-se de que a tag existe no jogo

### Erro de conexão
- Verifique sua conexão com a internet
- Verifique se o servidor tem permissão para fazer requisições HTTPS externas

