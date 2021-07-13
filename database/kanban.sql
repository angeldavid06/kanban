CREATE TABLE `projects` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255)
);

CREATE TABLE `leaders` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255)
);

CREATE TABLE `members` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255)
);

CREATE TABLE `teams` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `id_project` int,
  `id_leader` int,
  `id_member` int
);

CREATE TABLE `tasks` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `description` varchar(255),
  `date` date,
  `id_member` int,
  `id_priority` int,
  `id_step` int,
  `id_substep` int
);

CREATE TABLE `priority` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `priority` int
);

CREATE TABLE `board` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `id_team` int
);

CREATE TABLE `steps` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `id_step` int
);

CREATE TABLE `substeps` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `id_step` int
);

ALTER TABLE `teams` ADD FOREIGN KEY (`id_project`) REFERENCES `projects` (`id`);

ALTER TABLE `teams` ADD FOREIGN KEY (`id_leader`) REFERENCES `leaders` (`id`);

ALTER TABLE `teams` ADD FOREIGN KEY (`id_member`) REFERENCES `members` (`id`);

ALTER TABLE `tasks` ADD FOREIGN KEY (`id_member`) REFERENCES `members` (`id`);

ALTER TABLE `tasks` ADD FOREIGN KEY (`id_priority`) REFERENCES `priority` (`id`);

ALTER TABLE `tasks` ADD FOREIGN KEY (`id_step`) REFERENCES `steps` (`id`);

ALTER TABLE `tasks` ADD FOREIGN KEY (`id_substep`) REFERENCES `substeps` (`id`);

ALTER TABLE `board` ADD FOREIGN KEY (`id_team`) REFERENCES `teams` (`id`);

ALTER TABLE `steps` ADD FOREIGN KEY (`id_step`) REFERENCES `board` (`id`);

ALTER TABLE `substeps` ADD FOREIGN KEY (`id_step`) REFERENCES `steps` (`id`);
