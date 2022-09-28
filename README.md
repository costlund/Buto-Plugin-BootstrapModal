# Buto-Plugin-BootstrapModal
Widget to render a Bootstrap Modal.

## Widget
```
plugin: bootstrap/modal
method: modal
data:
  id: my_modal
  title: Task
  body:
    -
      type: div
      innerHTML: Plain text or elements.
  footer:
    -
      type: div
      innerHTML: Plain text or elements.
```
Close button (Optional where default is true).
```
  btn_close: false
```
