# ⚡ Configuração Rápida - SEM PHP NECESSÁRIO!

## 🎯 Passo a Passo (2 minutos)

### 1. Obter Chave de API
- Acesse: https://developer.clashroyale.com/
- Faça login
- Crie uma API Key
- Copie a chave

### 2. Configurar no Navegador

1. Abra o `index.html` no navegador
2. Pressione **F12** para abrir o Console
3. Cole este comando (substitua `SUA_CHAVE` pela sua chave real):
   ```javascript
   localStorage.setItem('clashRoyaleApiKey', 'SUA_CHAVE')
   ```
4. Pressione **Enter**
5. Recarregue a página (**F5**)

### 3. Testar

1. Digite uma tag de jogador (ex: `#QVP20`)
2. Clique em "Buscar"
3. Pronto! 🎉

## ⚠️ Problemas?

### Erro: "Configure sua chave de API"
- Verifique se digitou o comando corretamente no console
- Certifique-se de que a chave está entre aspas: `'sua-chave'`
- Recarregue a página após configurar

### Erro: "Tag Inválida"
- Verifique se a tag existe no jogo
- A tag deve ter apenas letras e números (sem espaços)
- Exemplo válido: `#QVP20` ou `QVP20`

### Erro: "Chave de API inválida"
- Verifique se a chave está correta
- Verifique se a chave não expirou
- Gere uma nova chave em https://developer.clashroyale.com/

## 💡 Dica

A chave fica salva no navegador, então você só precisa configurar uma vez por navegador!


