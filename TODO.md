# Todo for new project

=========== DONE ===========
- Make empty DB tables, first the ones without foreign keys (and copy instructions to sql files)
```sql
create TABLE mvc_boeken ( 
	id integer unsigned NOT NULL AUTO_INCREMENT, 
	titel varchar(100) NOT NULL, 
	genre_id integer, 
	CONSTRAINT pk_id PRIMARY KEY (id),
	CONSTRAINT fk_genre_id FOREIGN KEY (genre_id) REFERENCES mvc_genres (id)
); 
```
- Make folders Business, Data, Entities, Exceptions, Presentation
- Make entities: file/class "Item" with functions (getter/setter)
- data layer: DBConfig, file/class "ItemDAO" - connect to DB with try/catch (+ tests), check exceptions
- business: file/class "ItemService" per task, uses DAO (+ tests)
- presentation: html (twig?)
- controllers: root files, logic (use service) + include presentation (or redirect after edit)
- Namespaces, auto-loading
- Add functionalities:
  - xxx
- check var types (and typos/red lines)
EXTRAS:
- xxx




## TODO preparing the template

- select current line (to remove, or change position?) - triple click on line number, or use shortcut to move/delete
- delete html tag (remove tag preserves children): option-click, select "Remove tag (preserves children)"
- add php live templates
=========== DONE ===========
- users service and dao
- session class ?
- css template styles?