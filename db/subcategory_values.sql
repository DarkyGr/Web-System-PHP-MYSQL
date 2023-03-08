INSERT INTO subcategory (id_subcategory, id_category, name_sc) VALUES
(0, 1, 'Oils'),
(0, 1, 'Rice'),
(0, 1, 'Pasta & Noodles'),
(0, 1, 'Flour'),
(0, 1, 'Soups & Pure'),
(0, 1, 'Sugar'),
(0, 1, 'Coffee & Milk'),
(0, 1, 'Te'),
(0, 1, 'Jam'),
(0, 1, 'Cockies & Snacks'),
(0, 1, 'Cakes');

SELECT sub.id_subcategory, sub.name_sc, ca.name_c AS category, sub.status_sc FROM category ca 
INNER JOIN subcategory sub ON ca.id_category = sub.id_category;

SELECT cat.id_category, cat.name_c FROM category cat
INNER JOIN subcategory sub ON cat.id_category = sub.id_category WHERE sub.id_subcategory = 19
UNION SELECT id_category, name_c FROM category WHERE status_c = 1;