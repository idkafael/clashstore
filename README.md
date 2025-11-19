# 🎮 Clash Royale Store

Loja de itens do Clash Royale com sistema de pagamento integrado.

## 🚀 Deploy no Vercel

### Opção 1: Deploy via GitHub (Recomendado)

1. Conecte seu repositório GitHub ao Vercel
2. O Vercel detectará automaticamente as configurações
3. Clique em "Deploy"

### Opção 2: Deploy via CLI

```bash
# Instale o Vercel CLI
npm i -g vercel

# Faça login
vercel login

# Deploy
vercel

# Deploy em produção
vercel --prod
```

## 📋 Configuração

### Variáveis de Ambiente (Opcional)

Se quiser usar a verificação de ID via PHP, configure:

- `CLASH_ROYALE_API_KEY` - Sua chave de API do Clash Royale

## 🔧 Estrutura do Projeto

```
├── index.html          # Página principal
├── fuck.php            # API para verificação de jogadores
├── css/                # Estilos
├── js/                 # Scripts JavaScript
├── images/             # Imagens
├── fonts/              # Fontes
└── vercel.json         # Configuração do Vercel
```

## 📝 Notas

- A verificação de ID está **comentada** por padrão
- Para ativar, siga as instruções em `COMO_REATIVAR_VERIFICACAO.md`
- Os links de pagamento estão configurados em `index.html`

## 🔗 Links

- Repositório: https://github.com/idkafael/clashstore
- Vercel: https://vercel.com

## 📄 Licença

MIT

