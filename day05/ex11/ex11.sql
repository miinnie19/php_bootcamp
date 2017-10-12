SELECT UCASE(db_mnaidoo.user_card.last_name) AS NAME, db_mnaidoo.user_card.first_name, db_mnaidoo.subscription.price
FROM db_mnaidoo.subscription, db_mnaidoo.user_card
WHERE price > 42
ORDER BY subscription.name ASC, user_card.first_name ASC;
