-- Выборки пользователей, у которых пригласивший их пользователь из другой группы.

select main_users.id
from users as main_users
inner join users as invited_by_users
    on main_users.invited_by_user_id = invited_by_users.id
    and main_users.group_id <> invited_by_users.group_id;