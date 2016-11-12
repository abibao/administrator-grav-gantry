---
title: Static
content:
  order:
    dir: asc
    by: folder
  items: '@self.modular'
body_classes: modular
heading:
  display: false
  bread: false
  bgcol_theme: true
form:
  title: home-contact
  name: form-contact
  action: http://dashboard.abibao.com/register
  method: get
  fields:
    -
      name: registermail
      label: Email
      placeholder: 'Mon email'
      type: email
      validate:
        required: true
  buttons:
    -
      type: submit
      value: "M’inscrire"
  process:
---
---
