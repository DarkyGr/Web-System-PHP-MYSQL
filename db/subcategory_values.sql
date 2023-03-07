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
INNER JOIN subcategory sub ON ca.id_category = sub.id_subcategory;