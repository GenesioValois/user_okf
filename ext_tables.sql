#
# Table structure for table 'user_okf_photo_images'
#
CREATE TABLE user_okf_photo_images (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	hidden tinyint(4) DEFAULT '0' NOT NULL,
	starttime int(11) DEFAULT '0' NOT NULL,
	endtime int(11) DEFAULT '0' NOT NULL,
	fe_group int(11) DEFAULT '0' NOT NULL,
	image_id int(11) DEFAULT '0' NOT NULL,
	cat_id int(11) DEFAULT '0' NOT NULL,
	image_name varchar(255) DEFAULT '' NOT NULL,
	image_thumb_file varchar(255) DEFAULT '' NOT NULL,
	image_allow_comments int(11) DEFAULT '0' NOT NULL,
	image_allow_itsme int(11) DEFAULT '0' NOT NULL,
	image_comments int(11) DEFAULT '0' NOT NULL,
	image_hits int(11) DEFAULT '0' NOT NULL,
	image_votes int(11) DEFAULT '0' NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);



#
# Table structure for table 'user_okf_photo_categories'
#
CREATE TABLE user_okf_photo_categories (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	hidden tinyint(4) DEFAULT '0' NOT NULL,
	cat_id int(11) DEFAULT '0' NOT NULL,
	cat_name varchar(255) DEFAULT '' NOT NULL,
	cat_description text,
	cat_parent_id int(11) DEFAULT '0' NOT NULL,
	cat_hits int(11) DEFAULT '0' NOT NULL,
	cat_order int(11) DEFAULT '0' NOT NULL,
	cat_hires int(11) DEFAULT '0' NOT NULL,
	cat_since int(11) DEFAULT '0' NOT NULL,
	cat_time int(11) DEFAULT '0' NOT NULL,
	cat_location int(11) DEFAULT '0' NOT NULL,
	cat_type int(11) DEFAULT '0' NOT NULL,
	auth_viewcat int(11) DEFAULT '0' NOT NULL,
	auth_vote int(11) DEFAULT '0' NOT NULL,
	auth_postcomment int(11) DEFAULT '0' NOT NULL,
	auth_votepic int(11) DEFAULT '0' NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);



#
# Table structure for table 'user_okf_locations'
#
CREATE TABLE user_okf_locations (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	hidden tinyint(4) DEFAULT '0' NOT NULL,
	starttime int(11) DEFAULT '0' NOT NULL,
	endtime int(11) DEFAULT '0' NOT NULL,
	id int(11) DEFAULT '0' NOT NULL,
	cat_id int(11) DEFAULT '0' NOT NULL,
	premium int(11) DEFAULT '0' NOT NULL,
	name text,
	typ text,
	typ2 text,
	typ3 int(11) DEFAULT '0' NOT NULL,
	strasse text,
	plz varchar(5) DEFAULT '' NOT NULL,
	ort text,
	email text,
	telefon text,
	fax text,
	url text,
	offen text,
	dresscode text,
	age text,
	beschreibung text,
	hits int(11) DEFAULT '0' NOT NULL,
	since text,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);