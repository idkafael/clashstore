# 🚀 Deploy no Vercel - Guia Completo

## 📋 Pré-requisitos

1. Conta no Vercel: https://vercel.com
2. Repositório no GitHub (já configurado)

## 🔧 Método 1: Deploy via Dashboard (Mais Fácil)

### Passo 1: Conectar Repositório

1. Acesse: https://vercel.com/new
2. Faça login com sua conta GitHub
3. Clique em "Import Project"
4. Selecione o repositório: `idkafael/clashstore`
5. Clique em "Import"

### Passo 2: Configurar Projeto

O Vercel detectará automaticamente:
- **Framework Preset**: Other
- **Root Directory**: `./` (raiz)
- **Build Command**: (deixe vazio ou `echo 'No build required'`)
- **Output Directory**: `./` (raiz)

### Passo 3: Deploy

1. Clique em "Deploy"
2. Aguarde o processo (1-2 minutos)
3. Pronto! Seu site estará online

## 🔧 Método 2: Deploy via CLI

### Instalação

```bash
npm i -g vercel
```

### Login

```bash
vercel login
```

### Deploy

```bash
# Navegue até a pasta do projeto
cd "C:\Users\tailo\Downloads\clash royale"

# Deploy (primeira vez)
vercel

# Deploy em produção
vercel --prod
```

## ⚙️ Configurações Avançadas

### Variáveis de Ambiente (Opcional)

Se quiser usar a verificação de ID via API:

1. No dashboard do Vercel
2. Vá em Settings > Environment Variables
3. Adicione:
   - **Name**: `CLASH_ROYALE_API_KEY`
   - **Value**: Sua chave de API

### Domínio Personalizado

1. No dashboard do Vercel
2. Vá em Settings > Domains
3. Adicione seu domínio
4. Configure o DNS conforme instruções

## 📝 Notas Importantes

### ⚠️ PHP não funciona no Vercel

- O arquivo `fuck.php` está incluído mas **não funcionará** no Vercel
- O Vercel não suporta PHP nativamente
- A verificação de ID está **comentada** no código, então não há problema
- Se precisar de PHP, use outro serviço (ex: Railway, Render, ou servidor próprio)

### ✅ O que funciona:

- ✅ HTML estático
- ✅ CSS
- ✅ JavaScript
- ✅ Imagens e fontes
- ✅ Sistema de pagamento (links externos)

## 🔍 Verificando o Deploy

Após o deploy, você receberá uma URL como:
- `https://clashstore-xxx.vercel.app`

Teste:
1. Acesse a URL
2. Verifique se o site carrega
3. Teste os botões de compra
4. Verifique se os links de pagamento funcionam

## 🐛 Troubleshooting

### Erro: "Build Failed"

- Verifique se todos os arquivos estão no repositório
- Certifique-se de que `index.html` está na raiz

### Erro: "404 Not Found"

- Verifique se o `vercel.json` está correto
- Certifique-se de que os caminhos dos arquivos estão corretos

### Site não carrega CSS/JS

- Verifique os caminhos relativos no `index.html`
- Certifique-se de que todas as pastas (css, js, images) estão no repositório

## 📚 Recursos

- Documentação Vercel: https://vercel.com/docs
- Suporte: https://vercel.com/support

## ✅ Checklist de Deploy

- [ ] Repositório no GitHub
- [ ] Arquivo `vercel.json` criado
- [ ] Arquivo `package.json` criado
- [ ] README.md atualizado
- [ ] Deploy realizado
- [ ] Site testado
- [ ] Links de pagamento funcionando

---

**Pronto para deploy!** 🎉

