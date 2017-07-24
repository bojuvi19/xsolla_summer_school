select game 
	from users 
	where (select sum(amount) 
		from payments 
		where user_id=users.id)>100 
		and users.level>10 
		group by game;