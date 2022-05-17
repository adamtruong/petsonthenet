CREATE TABLE pet_info (
  `pet_id` INT PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `breed` varchar(255) NOT NULL,
  `species` varchar(50) NOT NULL,
  `color` varchar(255) NOT NULL,
  `description` varchar(1000),
  `price` double(10,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `number_sold` INT NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO pet_info (name, breed, species, color, description, price, image, number_sold) VALUES
('Tiu', 'Poodle', 'dog', 'Orange', 'The Poodle is known to be an adorable, long-haired duck hunting dog. Right from the first time, Poodle has attracted others with its lovely appearance and elegance. Therefore, these Poodles are increasingly popular all over the world. The Poodle is a medium-sized dog, approximately the same length as the height from the shoulder blades. The most distinguishing feature of the Poodle is its curly coat, which is difficult to confuse with other dogs. This breed is descended from breeds such as the French Waterdog, the Hungarian Water Hound and the Barbet. Today they have been bred to become a pet dog breed with curly coats and petite figures. They have an outstanding swimming talent; their German name is "Pudel", which means diver, water dog. And if you are overwhelmed by the cuteness of the Poodle and are thinking of adopting it, we, Petsonthenet, are an ideal place for you to bring your family a mischievous and lovely pet.', '387.69', './images/pet (1).jpg', 34),
('Harry', 'French Bulldog', 'dog', 'Orange', 'The French bulldog (or Frenchie) is a robust, compact dog breed with a huge head, short nose, and bat-like ears, first bred in France. This breed is full of life, affectionate, and playful characteristics. French bulldogs are appreciated for their lovely appearance and vivacity - alert but not too curious. If you meet them for the first time, it may seem intimidating, but in reality, French bulldogs are very approachable and friendly. The French bulldog looks quite sturdy and neat on the outside, but in fact, they are pretty small in size (about 30cm tall and weighing about 9-14kg). Soft fur and skin give us an extremely comfortable feeling every time we stroke them.', '522.73', './images/pet (2).png', 15 ),
('Cola', 'Cane Corso', 'dog', 'Brown',"Cane Corso, also known as Cane Corso Italiano, is a medium-sized mastiff native to Italy. They are solid but elegant, with strong and very prominent muscles, and the whole body is expressive. They are descendants of the breed used in Roman warfare. They are very loyal, caring, and quietly patrol around the house. Cane Corso is very intelligent and highly trainable. Cane Corso Italiano loves the host family's children, which always ready to play, protect and become their best friends. The Cane Corso has a genuine personality, making it an ideal dog to watch and guard. It will patrol around the property and always follow its owner closely. If needed, Cane Corso will become a brave and fearsome bodyguard to protect his owner, mansion and property.", '989.77', './images/pet (3).png', 20),
('Lucky', 'Boxer Dog', 'dog', 'Orange', "dog,brown, Loyalty, affection, intelligence, work ethic, and good looks: Boxers are the whole doggy package. Bright and alert, sometimes silly, but always courageous, the Boxer has been among America's most popular dog breeds for a very long time", "123", './images/pet (4).png', 40),
('Hieu', 'Silky Terrier', 'dog', 'Black', 'The Australian Silky Terrier or simply Silky Terrier is a small breed of dog of the terrier dog type. The breed was developed in Australia, although the ancestral types and breeds were from Great Britain.', '700', './images/pet (5).png', 5),
('Billy', 'English Bulldog', 'dog', 'White', 'The Bulldog is a British breed of dog of mastiff type. It may also be known as the English Bulldog or British Bulldog. It is of medium size, a muscular, hefty dog with a wrinkled face and a distinctive pushed-in nose.', '800', './images/pet (6).png', 59),
('Cho', 'British Shorthair', 'cat', 'gray', 'Referring to the British Shorthair cat, you will immediately think of a chubby gray-blue cat. This is the most common color in this breed. However, in addition to the blue-gray color, the British Shorthair cat also has more than 10 monochromatic colors. People often think that pet cats must be very picky eaters and need a lot of pampering. However, this is a big mistake if you buy a British Shorthair cat to adopt. These cats are easy to feed. They are almost omnivorous and will eat anything you give them. Eating nuts, eating rice with the family, or eating meat, fish, etc. British Shorthair is not to blame. In addition, they are also relatively healthy and rarely suffer from minor diseases.', '1100', './images/B_shorthair.png', 9),
('Beo', 'Persian Longhair', 'cat', 'gray', 'The Persian cat is a breed of cat typical of the country of Persia (now Iran). Although there is still some controversy about the origin of this cat breed, so far, people have not found any convincing evidence to refute the theory that cat 34 first appeared in Iran, because Therefore, cat associations as well as cat lovers around the world are familiar and unanimously call them Persian cats (Persian Cat, Longhair Persian Cat, Shirazi Cat). This breed of cat began to gain attention and popularity since the Phoenicians and Romans brought them to Europe in the 1500s. Here people were impressed and excited by the facial hair of this cat breed, so they continue to maintain and propagate to this day. A traditional Persian cat will have a nose with a moderate length (although still shorter than other cats) and instead people remember a Persian cat because of its cute, innocent expression. Poetry is like a doll. It is for that reason that in the past, in the West, people also called cat 34 "Doll Face Persian Cat".', '1500', './images/P_longhair.png', 38),
('Syl', 'British Longhair', 'cat', 'black', 'If you are looking to learn and choose a cat with long silky-smooth hair as your pet, the British Longhair is one of the best choices. The purebred British Longhair has a long, shiny coat and is quite thick, chubby body, deep chest. Their heads are round, large in proportion to the body, and the ears are small and short compared to the head, short muzzle, thick edges and big round eyes. The colon of the eyes depends on the color of the coat, but it is still mainly a golden copper color. Their legs are not too short, quite strong; The tail is also short but is covered with a long and beautifully drooping coat. The adult British Longhair cat has a rather peaceful, docile, gentle personality, very affectionate and easy to teach. When they are young, they are very active and love to play. However, they also carry the lazy personality of the Persian Cat; They love to lie down and sleep all day instead of chasing their toys. Therefore, the British Longhair Cat is very easy to raise, especially for those with busy work all day.', '1200', './images/B_longhair.png', 24),
('Khuc', 'Munchkin cat', 'cat', 'gray', 'The Munchkin cat or Sausage cat is a relatively new breed of cat characterized by its very short legs, which are caused by genetic mutation', '650', './images/pet (17).png', 3),
('Luna', 'Scottish Fold', 'cat', 'gray', 'The Scottish Fold is a breed of domestic cat with a natural dominant gene mutation that affects cartilage throughout the body, causing the ears to "fold", bending forward and down towards the front of the head, which gives the cat what is often described as an "owl-like" appearance.', '320', './images/3.png', 61),
('Bach Tu', 'Siamese cat', 'cat', 'gray', 'The Siamese cat is one of the first distinctly recognized breeds of Asian cat. Derived from the Wichianmat landrace, one of several varieties of cat native to Thailand, the original Siamese became one of the most popular breeds in Europe and North America in the 19th century.', '900', './images/4.png', 0);


CREATE TABLE user (
    `user_id` INT AUTO_INCREMENT,
    `name` varchar(100) NOT NULL,
    `phone_number` varchar(50),
    `address` varchar(100) NOT NULL,
    `email` varchar(255) NOT NULL UNIQUE,
    `order_volume` INT NOT NULL,
    `money_spent` INT NOT NULL,
    PRIMARY KEY (user_id)

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO user (name, phone_number, address, email, order_volume, money_spent) VALUES
('Long ', '12345678912', 'nhahanoi1','vietlong@gmail.com', '30','3500'),
('Adam', '2312334233', 'thanhhoa101','adam@gmail.com','6','1000'),
('Hung', '239452678', 'Hanoi', 'hung@gmail.com', '12', '1900'),
('Duong', '983745674', 'HCM', 'duong@gmail.com', '60', '5000');

CREATE TABLE cart (
    `id` INT AUTO_INCREMENT,
    `user_id` INT NOT NULL,
    `pet_id` INT NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (user_id) REFERENCES user(user_id),
    FOREIGN KEY (pet_id) REFERENCES pet_info(pet_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- INSERT INTO cart
-- SELECT LAST_INSERT_ID() FROM user;


-- SELECT name, breed, price
-- FROM pet_info 
-- WHERE pet_info.pet_id = cart.pet_id;
-- UNION ALL
-- SELECT * 
-- FROM user
-- WHERE user.user_id = cart.user_id;



