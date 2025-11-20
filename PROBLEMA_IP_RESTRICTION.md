# ⚠️ Problema: Restrição de IP na Chave de API

## 🔍 Problema Identificado

Sua chave de API tem uma **restrição de IP**: `"cidrs":["103.210.78.250"]`

Isso significa que a chave **SÓ funciona** se a requisição vier desse IP específico.

## ❌ Por que não funciona no Vercel?

O Vercel usa **IPs diferentes** para fazer requisições, então:
- ✅ A chave funciona no seu servidor local (se o IP for `103.210.78.250`)
- ❌ A chave **NÃO funciona** no Vercel (IPs diferentes)

## ✅ Soluções

### Opção 1: Criar Nova Chave SEM Restrição de IP (Recomendado)

1. Acesse: **https://developer.clashroyale.com/**
2. Vá em **"API Keys"**
3. **Revogue ou desative** a chave atual
4. **Crie uma nova chave de API**
5. **IMPORTANTE**: Quando criar, **NÃO adicione restrição de IP**
   - Deixe o campo "IP Restriction" vazio ou use `0.0.0.0/0` (permite todos os IPs)
6. Use essa nova chave no Vercel

### Opção 2: Remover Restrição da Chave Atual

Se possível, edite a chave atual:
1. Acesse: **https://developer.clashroyale.com/**
2. Vá em **"API Keys"**
3. Encontre sua chave
4. Edite e remova a restrição de IP
5. Salve

### Opção 3: Usar Chave Diferente para Vercel

Crie uma chave específica para produção (Vercel):
1. Crie uma nova chave SEM restrição de IP
2. Configure no Vercel como variável de ambiente
3. Mantenha a chave atual para desenvolvimento local

## 🔧 Como Configurar Nova Chave no Vercel

1. Acesse: **https://vercel.com**
2. Vá no projeto **clashstore**
3. **Settings** > **Environment Variables**
4. Adicione:
   - **Name:** `CLASH_ROYALE_API_KEY`
   - **Value:** (sua nova chave SEM restrição de IP)
   - **Environments:** Production, Preview, Development
5. Salve
6. Faça **Redeploy**

## ⚠️ Segurança

- ✅ Chaves SEM restrição de IP são **menos seguras** (qualquer IP pode usar)
- ✅ Mas são **necessárias** para funcionar em serviços como Vercel, Netlify, etc.
- ⚠️ Para produção, use variáveis de ambiente (já configurado)
- ⚠️ Nunca commite a chave no código (use variável de ambiente)

## 🎯 Resumo

- **Problema:** Chave tem restrição de IP `103.210.78.250`
- **Solução:** Criar nova chave SEM restrição de IP
- **Configurar:** Variável de ambiente no Vercel
- **Resultado:** Funciona no Vercel ✅

