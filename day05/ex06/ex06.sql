SELECT title, summary
FROM db_mnaidoo.film
WHERE summary LIKE '%Vincent%'
ORDER BY id_film ASC;