# Como Rodar o Projeto Localmente

## ⚠️ Problema: Preview não funciona!

Quando você abre o `index.html` diretamente no navegador (preview), o AJAX **não funciona** porque:
- Navegadores bloqueiam requisições AJAX para arquivos locais (`file://`)
- O PHP precisa de um servidor para executar

## ✅ Solução: Use um Servidor PHP Local

### Opção 1: Servidor PHP Built-in (Mais Fácil)

1. Abra o PowerShell ou Terminal na pasta do projeto:
   ```powershell
   cd "C:\Users\tailo\Downloads\clash royale"
   ```

2. Inicie o servidor PHP:
   ```powershell
   php -S localhost:8000
   ```

3. Abra no navegador:
   ```
   http://localhost:8000/index.html
   ```

### Opção 2: XAMPP / WAMP / Laragon

1. Instale o XAMPP: https://www.apachefriends.org/
2. Copie a pasta do projeto para `C:\xampp\htdocs\clash-royale\`
3. Inicie o Apache no XAMPP
4. Acesse: `http://localhost/clash-royale/index.html`

### Opção 3: VS Code Live Server (Não funciona para PHP)

⚠️ O Live Server do VS Code **NÃO executa PHP**. Você precisa de um servidor PHP real.

## 🔑 Configurar a Chave de API

**ANTES de testar**, configure sua chave de API:

1. Obtenha sua chave em: https://developer.clashroyale.com/
2. Abra o arquivo `fuck.php`
3. Na linha 16, substitua:
   ```php
   $apiKey = 'YOUR_API_KEY_HERE';
   ```
   Por:
   ```php
   $apiKey = 'sua-chave-aqui';
   ```

## 🧪 Testar

1. Certifique-se de que o servidor PHP está rodando
2. Acesse `http://localhost:8000/index.html`
3. Digite uma tag de jogador válida (ex: `#QVP20`)
4. Clique em "Buscar"

## 🐛 Debug

Se ainda não funcionar:

1. Abra o Console do Navegador (F12)
2. Veja as mensagens de erro detalhadas
3. Verifique se:
   - ✅ Servidor PHP está rodando
   - ✅ Chave de API está configurada
   - ✅ Arquivo `fuck.php` está na mesma pasta
   - ✅ Tag do jogador está no formato correto (sem espaços)

## 📝 Exemplo de Tag Válida

- ✅ `#QVP20`
- ✅ `QVP20` (o # é adicionado automaticamente)
- ❌ `# QVP 20` (com espaços)
- ❌ `q v p 2 0` (com espaços)


