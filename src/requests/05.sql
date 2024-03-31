-- Выборки групп с максимальным количеством постов у пользователей.
-- UPD: Я так понимаю, все таки таск - выбор группы с максимальным кол-вом постов юзеров (но если все таки нужны все, то можно убрать limit 1)

select g.id, sum(u.posts_qty) as posts_qty_sum
from groups as g
inner join users as u
    on g.id = u.group_id
group by g.id
order by posts_qty_sum desc
limit 1;