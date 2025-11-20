# ⚡ Configure AGORA para Funcionar!

## 🚨 O problema:

A busca não funciona porque a **chave de API não está configurada**.

## ✅ Solução Rápida (2 opções):

### Opção 1: Configurar no PHP (Recomendado se tiver servidor PHP)

1. Abra o arquivo `fuck.php`
2. Na linha 16, substitua:
   ```php
   $apiKey = 'YOUR_API_KEY_HERE';
   ```
   Por:
   ```php
   $apiKey = 'SUA_CHAVE_AQUI';
   ```
3. Use um servidor PHP local:
   ```bash
   php -S localhost:8000
   ```
4. Acesse: `http://localhost:8000/index.html`

### Opção 2: Configurar no Navegador (Funciona sem PHP, mas pode ter CORS)

1. Abra o `index.html` no navegador
2. Pressione **F12** (Console)
3. Cole este comando:
   ```javascript
   localStorage.setItem('clashRoyaleApiKey', 'SUA_CHAVE_AQUI')
   ```
4. Recarregue a página (F5)

## 🔑 Como obter a chave de API:

1. Acesse: **https://developer.clashroyale.com/**
2. Faça login
3. Vá em **"My Account"** > **"API Keys"**
4. Clique em **"Create New Key"**
5. Copie a chave completa (ela será bem longa!)

## ⚠️ IMPORTANTE:

- **TAG** = O que você digita para pesquisar (ex: `#VCYJCYYR2`)
- **CHAVE DE API** = O que você configura (chave longa da Supercell)

**NÃO confunda!** A tag do jogador é diferente da chave de API!

## 🐛 Se ainda não funcionar:

1. Verifique se a chave tem pelo menos 20 caracteres
2. Verifique se copiou a chave COMPLETA
3. Se usar PHP, verifique se o servidor está rodando
4. Veja os erros no console (F12)

