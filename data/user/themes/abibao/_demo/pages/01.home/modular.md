---
title: Home
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
  action: /home
  fields:
    -
      name: email
      label: Email
      placeholder: 'Enter your email'
      type: email
      validate:
        required: true
  buttons:
    -
      type: submit
      value: 'Subscribe Now'
  process:
---
