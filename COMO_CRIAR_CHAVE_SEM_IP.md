# 🔑 Como Criar Chave de API SEM Restrição de IP

## 📋 Passo a Passo Completo

### 1. Acessar o Site da Supercell Developer

1. Acesse: **https://developer.clashroyale.com/**
2. Faça login com sua conta Supercell (ou crie uma se não tiver)

### 2. Navegar até API Keys

1. Após fazer login, você verá o dashboard
2. Clique em **"My Account"** ou **"API Keys"** (geralmente no menu superior ou lateral)
3. Você verá uma lista das suas chaves de API existentes

### 3. Criar Nova Chave de API

1. Procure por um botão como:
   - **"Create New Key"**
   - **"New API Key"**
   - **"Create Key"**
   - **"Add New"**
   - Ou um ícone de **"+"** ou **"Add"**

2. Clique no botão

### 4. Configurar a Nova Chave

Ao criar a nova chave, você verá campos como:

#### Campos que aparecerão:

1. **Name** ou **Description** (Nome/Descrição)
   - Digite algo como: `Vercel Production` ou `Clash Store`
   - Opcional, mas ajuda a identificar depois

2. **IP Restrictions** ou **Allowed IPs** (Restrição de IP)
   - ⚠️ **ESTE É O CAMPO IMPORTANTE!**
   - Você pode ver opções como:
     - Campo de texto para adicionar IPs
     - Checkbox para "Restrict by IP"
     - Opção de "No restrictions" ou "Allow all IPs"
     - Campo vazio (que significa sem restrição)

#### Como configurar SEM restrição:

**Opção A - Se houver checkbox:**
- ❌ **DESMARQUE** o checkbox de "Restrict by IP" ou "IP Restrictions"
- Deixe o campo vazio

**Opção B - Se houver campo de texto:**
- Deixe o campo **VAZIO**
- Não digite nenhum IP

**Opção C - Se houver opção "Allow all":**
- Selecione **"Allow all IPs"** ou **"No restrictions"**
- Ou use `0.0.0.0/0` (permite todos os IPs)

**Opção D - Se o campo não aparecer:**
- Se não aparecer nenhum campo de IP na criação, significa que **não há restrição por padrão**
- Está perfeito! Só crie a chave normalmente

### 5. Finalizar a Criação

1. Após configurar (ou deixar vazio o campo de IP)
2. Clique em **"Create"**, **"Generate"**, **"Save"** ou botão similar
3. A chave será gerada

### 6. Copiar a Chave

1. **IMPORTANTE**: A chave será mostrada apenas **UMA VEZ**
2. Copie a chave **COMPLETA** (será bem longa, 200+ caracteres)
3. Cole em um lugar seguro (bloco de notas, etc.)

### 7. Verificar a Chave

Após criar, verifique se a restrição de IP está vazia:

1. Na lista de chaves, encontre a chave que você criou
2. Clique para ver detalhes ou editar
3. Verifique o campo "IP Restrictions" ou "Allowed IPs"
4. Deve estar **VAZIO** ou mostrar **"No restrictions"**

## ⚠️ Dicas Importantes

### Se você já tem uma chave restrita:

1. Você pode **editar** a chave existente
2. Remova a restrição de IP
3. Salve as alterações
4. Isso pode funcionar, mas **criar uma nova é mais seguro**

### Se não conseguir remover a restrição:

1. **Revogue** ou **delete** a chave antiga (se não precisar mais)
2. Crie uma nova chave sem restrição
3. Use a nova chave no Vercel

### Campos que podem aparecer:

- ✅ **"IP Restrictions"** - Deixe vazio
- ✅ **"Allowed IPs"** - Deixe vazio  
- ✅ **"Restrict by IP"** - Desmarque
- ✅ **"No restrictions"** - Selecione esta opção
- ✅ **"CIDR"** ou **"IP Range"** - Deixe vazio

## 🎯 O que você DEVE ver:

✅ Campo de IP **VAZIO**  
✅ Ou checkbox **DESMARCADO**  
✅ Ou opção **"No restrictions"** selecionada

## ❌ O que você NÃO DEVE fazer:

❌ Não adicione `103.210.78.250` (ou qualquer IP)  
❌ Não marque "Restrict by IP"  
❌ Não adicione nenhum IP no campo

## 📝 Exemplo Visual (Referência)

Quando criar a chave, você pode ver algo assim:

```
┌─────────────────────────────────────┐
│ Create New API Key                  │
├─────────────────────────────────────┤
│ Name: [Vercel Production      ]     │
│                                     │
│ IP Restrictions:                    │
│ ⬜ Restrict by IP                   │
│ [                    ] (vazio)      │
│                                     │
│ [  Create  ] [  Cancel  ]           │
└─────────────────────────────────────┘
```

**Deixe o checkbox desmarcado e o campo vazio!**

## ✅ Após Criar

1. Copie a chave completa
2. Configure no Vercel (veja `CONFIGURAR_CHAVE_VERCEL.md`)
3. Teste a função serverless

## 🆘 Precisa de Ajuda?

Se a interface mudou ou você não encontrar essas opções:

1. Tire um screenshot da tela de criação de chave
2. Posso ajudar a identificar qual campo configurar
3. Ou verifique a documentação oficial: https://developer.clashroyale.com/

