
--
-- Index pour les tables exportées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`code_article`,`code_type_article`);

--
-- Index pour la table `evenements`
--
ALTER TABLE `evenements`
  ADD PRIMARY KEY (`code_evenement`);

--
-- Index pour la table `membres`
--
ALTER TABLE `membres`
  ADD PRIMARY KEY (`code_membre`);

--
-- Index pour la table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`code_menu`,`code_type_menu`);

--
-- Index pour la table `plats`
--
ALTER TABLE `plats`
  ADD PRIMARY KEY (`code_plat`,`code_type_plat`);

--
-- Index pour la table `types_article`
--
ALTER TABLE `types_article`
  ADD PRIMARY KEY (`code_type_article`);

--
-- Index pour la table `types_menu`
--
ALTER TABLE `types_menu`
  ADD PRIMARY KEY (`code_type_menu`);

--
-- Index pour la table `types_plat`
--
ALTER TABLE `types_plat`
  ADD PRIMARY KEY (`code_type_plat`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`code_utilisateur`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `code_article` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `code_utilisateur` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;