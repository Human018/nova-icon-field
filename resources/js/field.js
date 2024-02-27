import IndexField from './components/IndexField'
import DetailField from './components/DetailField'
import FormField from './components/FormField'

Nova.booting((app, store) => {
  app.component('index-icon-markup', IndexField)
  app.component('detail-icon-markup', DetailField)
  app.component('form-icon-markup', FormField)
})
