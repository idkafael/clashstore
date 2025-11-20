# Como Testar a API Route do Vercel

## 1. Verificar se a função foi deployada

Acesse no navegador:
```
https://clashstore-alpha.vercel.app/api/clash-royale?player_tag=%23VCYJCYYR2
```

**Se funcionar:**
- Você verá um JSON com os dados do jogador
- A API route está funcionando!

**Se não funcionar:**
- Verá um erro 404 (função não encontrada)
- Ou erro 500 (erro na função)

## 2. Verificar logs no Vercel

1. Acesse: https://vercel.com
2. Vá no projeto `clashstore`
3. Clique em **Functions**
4. Verifique se `/api/clash-royale` está listada

## 3. Verificar variável de ambiente (opcional)

1. Acesse: https://vercel.com
2. Vá em **Settings** > **Environment Variables**
3. Verifique se `CLASH_ROYALE_API_KEY` está configurada
4. Se não estiver, adicione:
   - **Name:** `CLASH_ROYALE_API_KEY`
   - **Value:** (sua chave de API)
   - **Environments:** Production, Preview, Development
5. Faça um novo deploy

## 4. Se ainda não funcionar

A função está configurada para usar a chave hardcoded como fallback, então deve funcionar mesmo sem variável de ambiente.

Se ainda assim não funcionar:
- Verifique os logs do Vercel (Deployments > Ver logs)
- Verifique se há erros no build

