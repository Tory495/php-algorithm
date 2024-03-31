-- Выборки пользователей, имеющих максимальное количество постов в своей группе.

select u.id
from users u
where (u.group_id, u.posts_qty) in (
    select group_id, MAX(posts_qty)
    from users
    group by group_id
);