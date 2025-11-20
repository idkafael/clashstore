# 🔑 Como Configurar a Chave de API no Vercel

## ✅ A Função Serverless Está Funcionando!

A API route `/api/clash-royale` está funcionando, mas a chave de API está inválida ou expirada.

## 📋 Passo a Passo para Configurar

### 1. Obter uma Nova Chave de API

1. Acesse: **https://developer.clashroyale.com/**
2. Faça login com sua conta Supercell
3. Vá em **"My Account"** ou **"API Keys"**
4. Se já tiver uma chave:
   - Verifique se está ativa
   - Se estiver expirada, crie uma nova
5. Se não tiver, crie uma nova:
   - Clique em **"Create New Key"** ou **"New Key"**
   - Copie a chave **COMPLETA** (será bem longa, 200+ caracteres)

### 2. Configurar no Vercel (Recomendado - Mais Seguro)

1. Acesse: **https://vercel.com**
2. Vá no seu projeto **clashstore**
3. Clique em **Settings** (Configurações)
4. Clique em **Environment Variables** (Variáveis de Ambiente)
5. Clique em **Add New** (Adicionar Nova)
6. Configure:
   - **Name (Nome):** `CLASH_ROYALE_API_KEY`
   - **Value (Valor):** Cole sua chave de API completa
   - **Environments (Ambientes):** Marque todas as opções:
     - ✅ Production
     - ✅ Preview
     - ✅ Development
7. Clique em **Save** (Salvar)

### 3. Fazer Redeploy

Após adicionar a variável de ambiente:

1. Vá em **Deployments** (Deploys)
2. Clique nos três pontinhos (⋯) do último deploy
3. Clique em **Redeploy**
4. Ou simplesmente faça um novo commit para acionar deploy automático

### 4. Testar

1. Aguarde o deploy completar (1-2 minutos)
2. Acesse seu site: `https://clashstore-alpha.vercel.app`
3. Teste a busca com uma tag: `#VCYJCYYR2`
4. Deve funcionar agora! ✅

## 🔄 Alternativa: Atualizar no Código (Menos Seguro)

Se preferir atualizar diretamente no código (não recomendado para produção):

1. Abra o arquivo `api/clash-royale.js`
2. Na linha 4, substitua a chave antiga pela nova
3. Faça commit e push
4. O Vercel fará deploy automaticamente

## ⚠️ Por que a Chave Expirou?

- Chaves de API podem expirar após um tempo
- A chave pode ter sido revogada
- A chave pode estar bloqueada por uso excessivo

## ✅ Vantagens de Usar Variável de Ambiente

- ✅ Mais seguro (chave não fica exposta no código)
- ✅ Fácil de atualizar sem mudar código
- ✅ Diferentes chaves para dev/prod
- ✅ Boa prática recomendada

## 🐛 Problemas?

Se ainda não funcionar após configurar:

1. Verifique se a chave está correta (copie toda)
2. Verifique se o redeploy foi concluído
3. Verifique os logs do Vercel (Deployments > Ver logs)
4. Teste a API route diretamente:
   ```
   https://clashstore-alpha.vercel.app/api/clash-royale?player_tag=%23VCYJCYYR2
   ```

