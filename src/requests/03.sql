-- Выборки групп, количество пользователей в которых превышает 10000.

select g.id
from groups as g
inner join users as u 
    on u.group_id = g.id
group by g.id
having count(u.id) > 10000;