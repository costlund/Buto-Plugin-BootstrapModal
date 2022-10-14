# Buto-Plugin-BootstrapModal
Widget to render a Bootstrap Modal.

## Widget
```
type: widget
data:
  plugin: bootstrap/modal
  method: modal
  data:
    id: my_modal
    title: Task
```
Close button (default true).
```
    btn_close: false
```
Size (default lg).
```
    size: xl
```
Icon from plugin icons/octicons.
```
    icon: clock
```
### Body
```
    body:
      -
        type: div
        innerHTML: Plain text or elements.
```
### Footer
```
    footer:
      -
        type: div
        innerHTML: Plain text or elements.
```
