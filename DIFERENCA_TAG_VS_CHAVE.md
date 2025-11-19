# ⚠️ IMPORTANTE: Diferença entre TAG e CHAVE DE API

## ❌ O que você NÃO deve usar:

**TAG DE JOGADOR** (exemplo: `VCYJCYYR2`, `#QVP20`)
- É a identificação do jogador no jogo
- Você usa isso para **PESQUISAR** o jogador
- Não é uma chave de API!

## ✅ O que você DEVE usar:

**CHAVE DE API** (exemplo: `eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiJ9.eyJhdWQiOiJ...`)
- É uma chave longa (geralmente 100+ caracteres)
- Você obtém em: https://developer.clashroyale.com/
- É usada para **AUTENTICAR** nas requisições da API

## 🔑 Como obter sua Chave de API:

1. Acesse: **https://developer.clashroyale.com/**
2. Faça login (ou crie uma conta)
3. Vá em **"My Account"** ou **"API Keys"**
4. Clique em **"Create New Key"** ou **"New Key"**
5. Copie a chave completa (ela será bem longa!)

## 📝 Exemplo de como configurar:

No console do navegador (F12), digite:

```javascript
localStorage.setItem('clashRoyaleApiKey', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiJ9.eyJhdWQiOiJ...')
```

**IMPORTANTE:** Substitua pela sua chave REAL completa!

## 🎯 Resumo:

- **TAG** = O que você digita no campo de busca (ex: `#QVP20`)
- **CHAVE DE API** = O que você configura no localStorage (chave longa da Supercell)

## ❓ Ainda com problemas?

Se você já configurou a chave correta e ainda não funciona, pode ser problema de CORS. Nesse caso, use o método PHP (`fuck.php`) com um servidor local.


