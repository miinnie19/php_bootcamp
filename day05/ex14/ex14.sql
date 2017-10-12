SELECT floor_number AS 'floor', SUM(nb_seats) AS 'seats'
	   FROM db_mnaidoo.cinema
	   GROUP BY floor_number
	   ORDER BY SUM(nb_seats) DESC;
