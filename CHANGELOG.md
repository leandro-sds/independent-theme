# Changelog — Independent Theme

## [2.5.0] — 2026-04-22

### Melhorias

- Cabeçalho com tamanho padronizado para todos os estilos — apenas cores e aparência mudam ao trocar o estilo
- Redução do padding do header (~35%) para que o conteúdo apareça mais cedo na tela
- Estilo Céu e Fé alinhado ao padrão de altura do header — antes tinha padding próprio maior
- Screenshot atualizado para representar fielmente a identidade visual do tema

---

## [2.4.0] — 2026-04-17

### Adicionado
- 8º estilo visual: **Moderno** — roxo profundo, ciano elétrico, glassmorphism e animações
- Estilo **Neon Pop** reformulado para tema escuro com magenta vibrante
- Estilos **Vintage Café** e **Campo e Paixão** reformulados com paletas claras e legíveis

### Melhorias
- Redes sociais: campos agora aceitam apenas nome de usuário — URLs montadas automaticamente pelo tema
  - WhatsApp: só o número com código do país (ex.: 5544997540049)
  - Facebook, Instagram: só o nome de usuário (ex.: radiomaioramoroficial)
  - YouTube: nome do canal com ou sem @ (ex.: @radiomaioramor)
- Estilo **Céu e Fé** completamente renovado: degradê azul profundo, coral/laranja, Poppins/Inter
- Migração automática de tema antigo removida — evita herança de valores indesejados
- Transport dos campos de logo alterado para `refresh` — garante salvamento correto no banco

### Corrigido
- Escala da logo não obedecia ao Personalizador por causa de valor herdado de tema anterior
- Campo de escala restaurado com leitura correta do banco de dados

---

## [2.3.0] — 2026-04-14

### Adicionado
- Estilo **Céu e Fé** renovado com identidade mais moderna e espiritual
- Fontes Poppins e Inter no estilo Céu e Fé
- Acento coral (#e07b39) substituindo dourado mostarda no Céu e Fé

### Melhorias
- Cards da sidebar com sombra suave e hierarquia visual melhorada
- Busca integrada com campo e botão harmoniosos no Céu e Fé
- Blockquotes com borda coral e fundo azul suave

---

## [2.2.0] — 2026-04-10

### Adicionado
- Animações de entrada: fadeInUp, fadeInDown, fadeInRight para conteúdo, header e sidebar
- Animação escalonada nos artigos e widgets
- Sublinhado animado nos itens de menu via `::after`
- Suporte a `prefers-reduced-motion` — todas as animações são desativadas automaticamente

### Melhorias
- Estilo Padrão refinado com azul-petróleo e dourado nos destaques
- Estilo Marinelli fiel ao original Drupal 7 (azul-aço #054b81, laranja #f97e05)
- Rodapé com área de widgets e ícones SVG das redes sociais

---

## [2.1.0] — 2026-04-01

### Lançamento inicial no GitHub

#### Adicionado
- 7 estilos visuais: Padrão, Neon Pop, Vintage Café, Campo e Paixão, Céu e Fé, Tinta & Papel, Marinelli Drupal
- Personalizador com controles de logo, layout, redes sociais e ano de fundação
- Copyright automático com intervalo de anos (ex.: © 2013–2026)
- Fonte Inter e Montserrat via Google Fonts
- Acessibilidade WCAG AA completa
- Skip-link funcional para leitores de tela
- Menu hambúrguer acessível com aria-labels dinâmicos
- Botão de menu/busca oculto para leitores de tela em desktop
- Suporte a sidebar com widgets
- Aviso no painel para orientar sobre classes CSS em menus
- Estilo Marinelli: homenagem fiel ao tema clássico do Drupal 7
