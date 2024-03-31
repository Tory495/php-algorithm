-- Выборки пользователей, у которых количество постов больше, чем у пользователя их пригласившего.

select main_users.id
from users as main_users
inner join users as invited_by_users
    on main_users.invited_by_user_id = invited_by_users.id
where main_users.posts_qty > invited_by_users.posts_qty;