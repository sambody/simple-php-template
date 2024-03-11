

- simplify method naming UsersDAO: get, getAll,...
- 
- CSS: use indentation
- Add menu dropdown (on click for accessibility)
- Add mobile menu other from html template
- Add search form with icon
- Add other special form inputs (range, date,...)
- Other components? See Pico, Bootstrap, Foundation... (but not too much!)
- Add custom checkboxes, radios, slider checkboxes?


- SASS version? like foundation/bootstrap, to get separate css files and functions/mixins? Or use separate files without SASS.






# Todo NewProject

=========== DONE ===========
- After copy template (in Finder), remove: README.md, (License), (.gitignore or keep)
- Make empty DB tables, first the ones without foreign keys (see SQL file)
- Make folders Business, Data, Entities, Exceptions, Presentation
- Make entities: file/class "Item" with functions (getter/setter)
- data layer: DBConfig, file/class "ItemDAO" - connect to DB with try/catch (+ tests), check exceptions
- business: file/class "ItemService" per task, uses DAO (+ tests)
- presentation: html (twig?)
- abstractDBHandler: add possibility to add extra options: fetch_column, fetch_key_pair, fetch_unique, fetch_group
- controllers: root files, logic (use service) + include presentation (or redirect after edit)
- Namespaces, auto-loading
- Add functionalities:
  - xxx
- check var types (and typos/red lines)
EXTRAS:
- xxx




