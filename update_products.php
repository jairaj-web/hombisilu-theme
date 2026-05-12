<?php
function hb_update($id, $tagline, $short_desc, $ingredients, $benefits, $nutrition, $how_to_use, $storage, $shelf_life) {
    $benefits_html = '';
    foreach (explode('|', $benefits) as $b) {
        $benefits_html .= '<li>' . esc_html(trim($b)) . '</li>';
    }
    $nutrition_html = '';
    foreach (explode('|', $nutrition) as $n) {
        $nutrition_html .= '<li>' . esc_html(trim($n)) . '</li>';
    }
    $content = '<div class="product-info-blocks">';
    $content .= '<div class="pi-block"><h4>Ingredients</h4><p>' . esc_html($ingredients) . '</p></div>';
    $content .= '<div class="pi-block"><h4>Key Benefits</h4><ul>' . $benefits_html . '</ul></div>';
    $content .= '<div class="pi-block"><h4>Nutritional Info (per 100g)</h4><ul>' . $nutrition_html . '</ul></div>';
    $content .= '<div class="pi-block"><h4>How to Use</h4><p>' . esc_html($how_to_use) . '</p></div>';
    $content .= '<div class="pi-block pi-meta"><p><strong>Storage:</strong> ' . esc_html($storage) . '</p><p><strong>Shelf Life:</strong> ' . esc_html($shelf_life) . '</p></div>';
    $content .= '</div>';
    wp_update_post([
        'ID'           => $id,
        'post_excerpt' => $tagline . ' — ' . $short_desc,
        'post_content' => $content,
    ]);
    echo "Updated product ID: $id\n";
}

// COFFEE
hb_update(28,
    'The Soul of South Indian Mornings',
    'A premium 70:30 coffee-chicory blend for a strong, aromatic, full-bodied South Indian decoction.',
    'Roasted Coffee (70%), Chicory (30%)',
    'Strong, aromatic full-bodied brew|Perfect for traditional filter decoction|No artificial flavours, colours, or preservatives|FSSAI Certified',
    'Energy: 285 Kcal|Protein: 11.2 g|Carbohydrates: 52.4 g|Dietary Fiber: 18.5 g|Caffeine: 950-1100 mg',
    'Add 1-2 tablespoons to the filter. Pour hot water and allow decoction to drip. Mix with hot milk and sweeten to taste.',
    'Store in an airtight container after opening.',
    'Best Before 6 Months from Date of Packing'
);

hb_update(29,
    'Elevated Aroma, Unmatched Depth',
    'An 80:20 premium blend for the discerning coffee lover — intensely aromatic and deeply flavoured.',
    'Roasted Coffee (80%), Chicory (20%)',
    'Stronger, richer aroma than standard blend|Ideal for intense coffee lovers|No artificial flavours, colours, or preservatives|FSSAI Certified',
    'Energy: 285 Kcal|Protein: 11.2 g|Carbohydrates: 52.4 g|Dietary Fiber: 18.5 g|Caffeine: 950-1100 mg',
    'Add 1-2 tablespoons to the filter. Allow hot water to pass through slowly for a rich decoction. Mix with hot milk and sweeten to taste.',
    'Store in an airtight container after opening.',
    'Best Before 6 Months from Date of Packing'
);

// CHUTNEY POWDERS
hb_update(30,
    'The Aromatic Essence of Karnataka',
    'Aromatic chutney powder with roasted lentils and traditional spices — perfect with rice, idli, dosa, and ghee.',
    'Dried Curry Leaves, Roasted Chana Dal, Urad Dal, Cumin Seeds, Dry Red Chillies, Tamarind, Asafoetida, Jaggery, Salt, Edible Oil',
    'Supports digestion|Rich in antioxidants|Good source of plant protein|Contains essential minerals|Supports hair and skin health',
    'Energy: 430 Kcal|Protein: 15 g|Carbohydrates: 40 g|Fat: 26 g|Fiber: 18 g|Iron: 5 mg',
    'Mix 1-2 teaspoons with hot rice and ghee or sesame oil. Sprinkle over idli, dosa, or uttapam. Blend with oil to make an instant chutney paste.',
    'Store in an airtight container after opening.',
    'Best Before 4 Months from Date of Packing'
);

hb_update(31,
    "Nature's Superfood in Every Pinch",
    'Nutrient-dense chutney powder with dried moringa leaves, roasted lentils, and traditional spices.',
    'Dried Moringa Leaves, Roasted Chana Dal, Urad Dal, Dry Red Chillies, Garlic, Cumin Seeds, Salt',
    'Rich in iron, calcium, and antioxidants|Supports immunity and overall health|Helps improve energy and stamina|Good for digestion',
    'Energy: 35-45 Kcal|Carbohydrates: 4-5 g|Protein: 2-3 g|Fat: 1-2 g|Fiber: 1-2 g',
    'Mix with hot rice and ghee or oil. Sprinkle on idli or dosa, or add to curries for extra nutrition.',
    'Store in a cool, dry place. Once opened, keep in an airtight container and use dry spoons.',
    'Best Before 6 Months from Date of Packing'
);

hb_update(32,
    'Nutty, Bold, Irresistibly Authentic',
    'Premium roasted peanut blend with select spices — a rich, nutty flavour beloved in South Indian households.',
    'Roasted Groundnuts (Peanuts), Red Chillies, Garlic, Cumin, Tamarind, Curry Leaves, Salt, Edible Oil',
    'Good source of protein|Energy boosting|Rich in healthy fats|No artificial flavours, colours, or preservatives',
    'Energy: 520 Kcal|Protein: 22 g|Carbohydrates: 30 g|Fat: 40 g|Fiber: 9 g',
    'Mix 1-2 teaspoons with hot rice and ghee or oil. Serve as a dry chutney with idli, dosa, chapati or roti.',
    'Store in an airtight container after opening.',
    'Best Before 4 Months from Date of Packing'
);

hb_update(33,
    'Heart-Healthy Goodness, South Indian Style',
    'Nutritious chutney powder from roasted flax seeds with spices and lentils — rich in omega-3 and fibre.',
    'Flax Seeds, Dry Red Chillies, Cumin, Tamarind, Jaggery, Salt',
    'Rich in omega-3 fatty acids|Good source of dietary fibre|Supports heart health|Contains plant-based protein|Aids digestion|Packed with antioxidants',
    'Energy: 500 Kcal|Protein: 18 g|Carbohydrates: 28 g|Fat: 38 g|Fiber: 20 g|Omega-3: 18 g',
    'Mix 1-2 teaspoons with hot rice and ghee or sesame oil. Serve as a side with idli, dosa, or chapati.',
    'Store in an airtight container after opening.',
    'Best Before 4 Months from Date of Packing'
);

hb_update(34,
    'Bold, Nutty & Deeply Nourishing',
    'Uchellu chutney powder from roasted niger seeds and traditional spices — deep nutty taste with authentic character.',
    'Niger Seeds (Uchellu), Dry Red Chillies, Cumin Seeds, Tamarind, Salt, Jaggery',
    'Rich in healthy fats and natural energy|Good source of plant-based protein and fibre|Supports heart health|Aids digestion|Contains iron and calcium',
    'Energy: 530 Kcal|Protein: 18 g|Carbohydrates: 28 g|Fat: 42 g|Fiber: 8.5 g',
    'Mix 1-2 teaspoons with hot rice and ghee or sesame oil. Serve as a side with idli, dosa, or chapati.',
    'Store in an airtight container after opening.',
    'Best Before 4 Months from Date of Packing'
);

hb_update(35,
    'Classic South Indian Simplicity',
    'Finely balanced roasted gram with select spices — the comforting richness of traditional Karnataka-style chutney.',
    'Roasted Gram (Hurigadale), Red Chillies, Cumin Seeds, Garlic, Curry Leaves, Tamarind, Salt, Edible Oil',
    'Rich in dietary fibre|Rich in plant-based protein|Enhances meals with balanced flavour|Traditional roasted preparation',
    'Energy: 380 Kcal|Protein: 20 g|Carbohydrates: 55 g|Fat: 6 g|Fiber: 10 g',
    'Mix 1-2 teaspoons with hot rice and ghee or oil. Serve as a side with idli, dosa or roti.',
    'Store in an airtight container after opening.',
    'Best Before 4 Months from Date of Packing'
);

hb_update(36,
    "The Wellness Chutney You Didn't Know You Needed",
    'Traditional roasted bitter gourd and aromatic spices — bold, distinctive flavour with meaningful wellness benefits.',
    'Bitter Gourd, Roasted Gram, Red Chillies, Coriander Seeds, Cumin Seeds, Tamarind, Curry Leaves, Garlic, Edible Oil, Salt',
    'Supports metabolic wellness|Rich in antioxidants|Traditional flavour profile|No artificial additives',
    'Energy: 410 Kcal|Protein: 14 g|Carbohydrates: 45 g|Fat: 18 g|Fiber: 12 g',
    'Mix 1-2 teaspoons with hot rice and ghee or oil. Serve as a dry chutney with idli, dosa, chapati or roti.',
    'Store in an airtight container after opening.',
    'Best Before 4 Months from Date of Packing'
);

// SPICES
hb_update(37,
    'Golden Spice, Timeless Wellness',
    'Vibrant golden turmeric powder from dried roots — earthy flavour, natural colour, rich in curcumin.',
    'Turmeric',
    'Supports anti-inflammatory response|Rich in antioxidants|Aids digestion|Supports joint health|May boost immunity|Supports liver function',
    'Energy: 312 Kcal|Carbohydrates: 68 g|Fiber: 22 g|Protein: 9 g|Fat: 3 g|Calcium: 170 mg|Iron: 45 mg|Potassium: 2050 mg|Curcumin: 2-5%',
    'Add 1/4-1/2 teaspoon to curries, dal, vegetables, and soups. Mix a pinch into warm milk or water for daily wellness.',
    'Store in a cool, dry place away from moisture.',
    'Best Before 6 Months from Date of Packing'
);

hb_update(38,
    'Rare, Potent & Deeply Healing',
    'Made from dried black turmeric rhizomes (Curcuma caesia) — rare, with a striking blue-purple interior and strong earthy aroma.',
    'Black Turmeric',
    'Rich in antioxidants|Supports immune health|Traditionally used for respiratory support|May help reduce inflammation|Supports digestive wellness|Used in Ayurvedic practices',
    'Energy: 330 Kcal|Protein: 7 g|Carbohydrates: 65 g|Dietary Fiber: 22 g|Fat: 4 g|Calcium: 180 mg|Iron: 50 mg',
    'Mix 1/4 teaspoon in warm water or milk once daily. Can be blended with honey for traditional use.',
    'Store in a cool, dry place away from moisture.',
    'Best Before 6 Months from Date of Packing'
);

hb_update(39,
    'The Heart of South Indian Comfort',
    'Exquisite blend of handpicked spices, roasted and ground for authentic South Indian rasam with depth and aroma.',
    'Coriander, Black Pepper, Cumin, Byadagi Chilli, Turmeric, Curry Leaves, Asafoetida',
    'Rich in vitamins, minerals and antioxidants|Low fat, no cholesterol|Digestive aid',
    'Energy: 320 Kcal|Protein: 12 g|Carbohydrates: 50 g|Fat: 6 g|Fiber: 18 g|Sodium: 150 mg',
    'Cook toor dal with tomatoes and smash. Add curry leaves, coriander, 2 spoons Rasam Powder, turmeric, salt, little jaggery, then boil 5-8 mins. Season with mustard, asafoetida, dry red chilli and curry leaves.',
    'Store in a cool, dark, dry place in an airtight container.',
    'Best Before 4 Months from Date of Packing'
);

hb_update(40,
    'Bold. Rustic. Quintessentially South Indian.',
    'Roasted lentils, garlic, and spices — Nalla Karam adds rich earthy flavour and traditional taste to every meal.',
    'Roasted Chana Dal, Urad Dal, Black Sesame Seeds, Dry Red Chillies, Garlic, Cumin Seeds, Salt, Oil',
    'Rich in plant protein and fibre|Aids digestion — garlic and cumin|Good source of healthy fats from sesame|Enhances appetite and taste',
    'Energy: 45-55 Kcal|Carbohydrates: 4-5 g|Protein: 2-3 g|Fat: 2-3 g|Fiber: 1-2 g',
    'Mix with hot rice and ghee, or sprinkle over idli or dosa, or use as a side with snacks and meals.',
    'Store in a cool, dry place. Once opened, keep in an airtight container and use dry spoons.',
    'Best Before 6 Months from Date of Packing'
);

hb_update(41,
    'One Spice Mix, Endless Possibilities',
    'Spicy, flavourful Andhra-style curry spice mix — adds instant depth to vegetable curries and stir-fries.',
    'Dry Red Chillies, Coriander Seeds, Cumin Seeds, Garlic, Curry Leaves, Salt',
    'Contains spices that support metabolism|Improves aroma and taste of simple dishes|Reduces need for multiple masalas',
    'Energy: 40-50 Kcal|Carbohydrates: 5-8 g|Protein: 1-2 g|Fat: 1-2 g|Fiber: 1-2 g',
    'Add during cooking of vegetable curries. Sprinkle on stir-fries, or mix with oil to coat dry vegetables before sauteing.',
    'Store in a cool, dry place. Once opened, use an airtight container and dry spoons.',
    'Best Before 6 Months from Date of Packing'
);

// HERBAL
hb_update(42,
    'Ancient Wisdom in Every Sip',
    'Traditional herbal blend of roots, spices, and medicinal herbs — a caffeine-free wellness drink rooted in Karnataka tradition.',
    'Coriander, Black Pepper, Cumin, Cardamom, Ashwagandha, Dry Ginger, Liquorice, Fennel, Wheat, Turmeric, Clove, and other spices and herbs',
    'Immunity Booster — rich in antioxidants from turmeric, black pepper, and dry ginger|Digestive Aid — enhances digestive health|Caffeine Free — healthy alternative to coffee or tea',
    'Energy: 388-403 Kcal|Carbohydrates: 45-60.1 g|Protein: 12.33-14.5 g|Fat: 15.52-16.8 g|Crude Fiber: 13 g',
    'Boil 1 teaspoon in 150-200 ml water or milk for 3-5 mins. Strain and consume warm. Add jaggery or sweetener if desired.',
    'Store in a cool, dry place. Once opened, use an airtight container and dry spoons.',
    'Best Before 6 Months from Date of Packing'
);

// PICKLES
hb_update(43,
    'A Pickle Born in the Western Ghats',
    'Traditional pickle from rare Jeerige Midi baby mangoes with a natural cumin-like aroma from the Malenadu region.',
    'Tender Mango (Jeerige Midi), Common Salt, Mustard, Fenugreek, Red Chilli, Turmeric, Refined Sunflower Oil, Asafoetida',
    'Aids digestion|Rich in antioxidants|Supports immunity|Boosts appetite|No artificial colours and preservatives',
    'Energy: 220 Kcal|Protein: 3 g|Carbohydrates: 20 g|Total Sugars: 8 g|Fat: 15 g|Fiber: 4 g|Sodium: 2000 mg',
    'Serve a small portion as a side with rice or curd rice. Mix with hot rice and a little oil or ghee. Always use a clean, dry spoon.',
    'Store in a cool, dry place. Once opened, keep in an airtight container and use dry spoons.',
    'Best Before 9 Months from Date of Packing'
);

hb_update(44,
    "Karnataka's Beloved Tangy Treasure",
    'Traditional Karnataka pickle from tender Appe Midi baby mangoes — bold, tangy heat with natural crunch.',
    'Tender Mango (Appe Midi), Common Salt, Mustard, Fenugreek, Red Chilli, Turmeric, Refined Sunflower Oil, Asafoetida',
    'Aids digestion|Rich in antioxidants|Supports immunity|Boosts appetite|No artificial colours and preservatives',
    'Energy: 220 Kcal|Protein: 3 g|Carbohydrates: 20 g|Total Sugars: 8 g|Fat: 15 g|Fiber: 4 g|Sodium: 2000 mg',
    'Serve as a side with curd rice, dosa, or hot steamed rice. Mix with hot rice and a little oil or ghee. Always use a clean, dry spoon.',
    'Store in a cool, dry place. Once opened, keep in an airtight container and use dry spoons.',
    'Best Before 9 Months from Date of Packing'
);

hb_update(45,
    "Tangy Wellness from Nature's Superfruit",
    'Traditional tangy-spicy pickle from fresh amla — naturally rich in Vitamin C and supports immunity.',
    'Amla (Gooseberry), Mustard Seeds, Fenugreek Seeds, Red Chilli Powder, Turmeric, Salt, Refined Sunflower Oil',
    'Rich in Vitamin C — boosts immunity|Aids digestion|Supports skin and hair health|Acts as a natural antioxidant',
    'Energy: 35 Kcal|Carbohydrates: 9 g|Fat: 4 g|Fiber: 2 g|Vitamin C: High Natural Source',
    'Serve as a side with rice, curd rice, dosa, or chapati. Mix with hot rice and a little oil or ghee. Use dry spoons.',
    'Store in a cool, dry place away from direct sunlight.',
    'Best Before 9 Months from Date of Packing'
);

// CANDIED FRUITS
hb_update(46,
    "Nature's Vitamin C Treat",
    'Premium Indian gooseberries traditionally processed and sweetened — a delicious sweet treat and digestive snack.',
    'Amla (Indian Gooseberry), Sugar, Permitted Class II Preservative',
    'Rich in Vitamin C|Digestive support|Antioxidant properties|Convenient wellness snack',
    'Energy: 280 Kcal|Carbohydrates: 70 g|Dietary Fiber: 5 g|Protein: 1 g|Vitamin C: 100-200 mg|Iron: 0.5-1.0 mg|Sodium: 5 mg',
    'Ready to eat. Consume directly or as a sweet digestive after meals.',
    'Store in a cool, dry place. Once opened, keep in an airtight container.',
    'Best Before 9 Months from Date of Packing'
);

hb_update(47,
    'The Goodness of Amla, Sweetened the Natural Way',
    'Premium Indian gooseberries sweetened with natural jaggery — iron-rich and free from refined sugar.',
    'Amla (Indian Gooseberry), Jaggery, Permitted Class II Preservative',
    'Iron-rich natural sweetener|Supports immunity|Aids digestion|Free from refined sugar',
    'Energy: 280 Kcal|Carbohydrates: 70 g|Dietary Fiber: 5 g|Protein: 1 g|Vitamin C: 100-200 mg|Iron: 0.5-1.5 mg|Sodium: 5 mg',
    'Ready to eat. Consume directly or as a sweet digestive after meals.',
    'Store in a cool, dry place. Once opened, keep in an airtight container.',
    'Best Before 9 Months from Date of Packing'
);

hb_update(48,
    'Sunshine in Every Bite',
    'Premium imported oranges traditionally processed and sweetened — a delicious treat for snacking and dessert decoration.',
    'Oranges, Sugar, Permitted Class II Preservative',
    'Rich in Vitamin C|Digestive support|Antioxidant properties|Enhances desserts and beverages',
    'Calories: 314-394 Kcal|Total Fat: 0-0.5 g|Total Carbohydrates: 78-98 g|Dietary Fiber: 2-5 g|Sugar: 68-70 g|Protein: 0-1 g|Sodium: 0-38 mg',
    'Ready to eat. Use to enhance desserts, garnish cocktails, elevate cakes, cookies and chocolates.',
    'Store in a cool, dry place. Once opened, keep in an airtight container.',
    'Best Before 9 Months from Date of Packing'
);

// SWEETS
hb_update(49,
    'Traditional Nourishment, Reimagined',
    'Wholesome blend of premium dry fruits and natural ingredients — rich taste, energy, and traditional nourishment.',
    'Ghee, Jaggery, Almonds, Cashews, Raisins, Cardamom, Ginger, Dry Coconut, Dates and Spices',
    'Natural energy source|Nutrient-dense|Traditional preparation|Ideal healthy indulgence',
    'Energy: 500 Kcal|Protein: 10 g|Carbohydrates: 50 g|Total Sugars: 30 g|Fat: 30 g|Fiber: 6 g',
    'Ready to eat. Consume as a nutritious snack anytime.',
    'Store in a cool, dry place. Once opened, keep in an airtight container.',
    'Best Before 8 Months from Date of Packing'
);

hb_update(50,
    'Strength in Every Bite',
    'Edible gum (gond) with premium dry fruits — energy-dense and nourishing, ideal for recovery and winter months.',
    'Edible Gum (Gond), Ghee, Jaggery, Almonds, Cashews, Raisins, Cardamom, Ginger, Dry Coconut, Dates, Herbs and Spices',
    'Natural energy source|Nutrient-dense|Traditional preparation|Ideal for post-partum recovery with doctor guidance|Ideal healthy indulgence',
    'Energy: 500 Kcal|Protein: 10 g|Carbohydrates: 50 g|Total Sugars: 30 g|Fat: 30 g|Fiber: 6 g',
    'Ready to eat. Note: Pregnant women should consume in moderation and consult their doctor before use as edible gum is heat-generating.',
    'Store in a cool, dry place. Once opened, keep in an airtight container.',
    'Best Before 8 Months from Date of Packing'
);

// HONEY
hb_update(51,
    "Straight from Nature's Hive",
    'Pure natural honey carefully sourced to retain rich flavour and goodness — the most natural way to sweeten your life.',
    'Pure Honey',
    'Natural energy source|Supports immunity|Soothes throat|Antioxidant-rich',
    'Energy: 304 Kcal|Protein: 0.3 g|Carbohydrates: 82 g|Total Sugars: 82 g|Fat: 0 g',
    'Add to warm water, milk, or tea, or drizzle over foods as a natural sweetener. Do not add to very hot liquids to preserve natural properties.',
    'Store in a cool, dry place. Once opened, use dry spoons to prevent spoilage.',
    'Best Before 9 Months from Date of Packing'
);

hb_update(52,
    'The Most Luxurious Way to Snack',
    'Premium dry fruits soaked in pure honey — a perfect harmony of crunchy, chewy, and sweet to fuel your day naturally.',
    'Pure Flow Honey, Almonds, Cashews, Raisins, Pumpkin Seeds, Sunflower Seeds',
    'Instant energy booster|Supports immunity and overall wellness|Rich in healthy fats and antioxidants|Helps improve stamina and vitality',
    'Energy: 450 Kcal|Protein: 9 g|Carbohydrates: 52 g|Total Sugars: 42 g|Fat: 22 g',
    'Ready to eat. Consume 1 spoon daily, preferably in the morning. Can be served as a healthy topping for oatmeal or yogurt.',
    'Store in a cool, dry place. Use dry spoons to prevent spoilage.',
    'Best Before 8 Months from Date of Packing'
);

// HEALTHY SNACKS
hb_update(53,
    "The Antioxidant Snack You'll Crave",
    'Tastefully tangy and mildly sweet snack made from real jamun pulp — supports digestion and helps regulate blood sugar.',
    'Jamun Pulp',
    'Supports digestion|Naturally rich in antioxidants|Helps regulate blood sugar levels|Refreshing and low-fat snack',
    'Energy: 50 Kcal|Carbohydrates: 14 g|Total Sugars: 10 g|Fat: 0.5 g|Fiber: 1 g',
    'Ready to eat. Carry for a midday treat or serve as a post-meal digestive.',
    'Store in a cool, dry place. Use dry spoons to prevent spoilage.',
    'Best Before 6 Months from Date of Packing'
);

echo "All 26 products updated successfully!\n";
