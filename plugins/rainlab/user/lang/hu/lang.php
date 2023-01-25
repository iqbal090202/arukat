<?php

return [
    'plugin' => [
        'name' => 'Felhasználók',
        'description' => 'Felhasználók menedzselése a weboldalon.',
        'tab' => 'Felhasználók',
        'access_users' => 'Fiókok kezelése',
        'access_groups' => 'Csoportok kezelése',
        'access_settings' => 'Beállítások kezelése',
        'impersonate_user' => 'Átjelentkezett felhasználók'
    ],
    'users' => [
        'menu_label' => 'Felhasználók',
        'all_users' => 'Felhasználók',
        'new_user' => 'Új felhasználó',
        'list_title' => 'Felhasználók kezelése',
        'trashed_hint_title' => 'A felhasználók felfüggeszthetik a saját fiókjukat',
        'trashed_hint_desc' => 'Amennyiben nem akarnak megjelenni a weboldalon, úgy deaktiválhatják a saját fiókjukat. Bármikor újra engedélyezhetik, ha újra sikeresen bejelentkeznek a weboldalra.',
        'banned_hint_title' => 'A felhasználó tiltva van',
        'banned_hint_desc' => 'Ezt a felhasználót már tiltotta egy adminisztrátor, így nem lesz képes bejelentkezni.',
        'guest_hint_title' => 'Vendég felhasználó',
        'guest_hint_desc' => 'Ez a felhasználó ideglenesen lett eltárolva. Regisztrálnia kell, mielőtt bejelentkezik a weboldalra.',
        'activate_warning_title' => 'Nincs aktiválva a felhasználó!',
        'activate_warning_desc' => 'Ennek a felhasználónak nem történt meg az aktiválása, így nem tud bejelentkezni.',
        'activate_confirm' => 'Valóban aktiválni akarja ezt a felhasználót?',
        'activated_success' => 'A felhasználó aktiválása megtörtént',
        'activate_manually' => 'A felhasználó kézi aktiválása',
        'convert_guest_confirm' => 'Legyen átkonvertálva teljes értékű felhasználóvá?',
        'convert_guest_manually' => 'Felhasználóvá konvertálás',
        'convert_guest_success' => 'A felhasználó konvertálása sikeresen megtörtént.',
        'impersonate_user' => 'Átjelentkezés a fiókba',
        'impersonate_confirm' => 'Biztos benne, hogy átjelentkezik a felhasználó saját fiókjába? Ezáltal a jelenlegi munkamenetből ki lesz jelentkeztetve.',
        'impersonate_success' => 'Sikeresen átjelentkezett a másik fiókba',
        'delete_confirm' => 'Valóban törölni akarja ezt a felhasználót?',
        'unban_user' => 'Felhasználó engedélyezése',
        'unban_confirm' => 'Valóban engedélyezni akarja ezt a felhasználót?',
        'unbanned_success' => 'A felhasználó sikeresen engedélyezve lett.',
        'return_to_list' => 'Vissza a felhasználó listához',
        'update_details' => 'Adatok módosítása',
        'bulk_actions' => 'Műveletek',
        'delete_selected' => 'Eltávolítás',
        'delete_selected_confirm' => 'Valóban törölni akarja a kiválasztott felhasználókat?',
        'delete_selected_empty' => 'Nincs kiválasztva felhasználó a törléshez.',
        'delete_selected_success' => 'A kiválasztott felhasználók sikeresen törölve lettek.',
        'activate_selected' => 'Aktiválás',
        'activate_selected_confirm' => 'Valóban aktiválni akarja a kiválasztott felhasználókat?',
        'activate_selected_empty' => 'Nincs kiválasztva felhasználó az aktiváláshoz.',
        'activate_selected_success' => 'A kiválasztott felhasználók sikeresen aktiválva lettek.',
        'deactivate_selected' => 'Deaktiválás',
        'deactivate_selected_confirm' => 'Valóban deaktiválni akarja a kiválasztott felhasználókat?',
        'deactivate_selected_empty' => 'Nincs kiválasztva felhasználó a deaktiváláshoz.',
        'deactivate_selected_success' => 'A kiválasztott felhasználók sikeresen deaktiválva lettek.',
        'restore_selected' => 'Visszaállítás',
        'restore_selected_confirm' => 'Valóban vissza akarja állítani a kiválasztott felhasználókat?',
        'restore_selected_empty' => 'Nincs kiválasztva felhasználó a visszaállításhoz.',
        'restore_selected_success' => 'A kiválasztott felhasználók sikeresen vissza lettek állítva.',
        'ban_selected' => 'Letiltás',
        'ban_selected_confirm' => 'Valóban tiltani akarja a kiválasztott felhasználókat?',
        'ban_selected_empty' => 'Nincs kiválasztva felhasználó a tiltáshoz.',
        'ban_selected_success' => 'A kiválasztott felhasználók sikeresen tiltva lettek.',
        'unban_selected' => 'Engedélyezés',
        'unban_selected_confirm' => 'Valóban engedélyezni akarja a kiválasztott felhasználókat?',
        'unban_selected_empty' => 'Nincs kiválasztva felhasználó az engedélyezéshez.',
        'unban_selected_success' => 'A kiválasztott felhasználók sikeresen engedélyezve lettek.',
        'unsuspend' => 'Felfüggesztés',
        'unsuspend_success' => 'A felfüggesztés sikeresen megtörtént.',
        'unsuspend_confirm' => 'Felfüggeszti a felhasználót?'
    ],
    'settings' => [
        'users' => 'Felhasználók',
        'menu_label' => 'Beállítások',
        'menu_description' => 'A felhasználókhoz tartozó beállítások kezelése.',
        'activation_tab' => 'Aktiválás',
        'signin_tab' => 'Bejelentkezés',
        'registration_tab' => 'Regisztráció',
        'profile_tab' => 'Profil',
        'notifications_tab' => 'Értesítések',
        'allow_registration' => 'Regisztráció engedélyezése',
        'allow_registration_comment' => 'Tiltás esetén csak az adminisztrátorok adhatnak hozzá felhasználót.',
        'activate_mode' => 'Aktiválási mód',
        'activate_mode_comment' => 'Válassza ki, hogyan kell aktiválni egy felhasználói fiókot.',
        'activate_mode_auto' => 'Automatikus',
        'activate_mode_auto_comment' => 'Regisztráláskor automatikusan aktiválva.',
        'activate_mode_user' => 'Felhasználó',
        'activate_mode_user_comment' => 'A felhasználó levéllel aktiválja a saját fiókját.',
        'activate_mode_admin' => 'Adminisztrátor',
        'activate_mode_admin_comment' => 'Csak adminisztrátor aktiválhat felhasználót.',
        'require_activation' => 'A bejelentkezéshez aktiválás szükséges',
        'require_activation_comment' => 'A felhasználóknak aktivált fiókkal kell rendelkezniük a bejelentkezéshez.',
        'use_throttle' => 'Kísérletek késleltetése',
        'use_throttle_comment' => 'Az ismétlődő sikertelen bejelentkezések ideiglenesen felfüggesztik a felhasználót.',
        'use_register_throttle' => 'Többszörös regisztráció',
        'use_register_throttle_comment' => 'Akadályozzon meg több regisztrációt ugyanarról az IP-ről, ha röviddel egymás után történnek.',
        'block_persistence' => 'Egyidejű munkamenet',
        'block_persistence_comment' => 'Engedélyezés esetén a felhasználók nem tudnak bejelentkezni egyszerre több eszközről.',
        'login_attribute' => 'Bejelentkezési azonosító',
        'login_attribute_comment' => 'Válassza ki, hogy milyen felhasználói adatot kell használni a bejelentkezéshez.',
        'remember_login' => 'Emlékezzen a felhasználóra',
        'remember_login_comment' => 'Válassza ki az alábbiak közül a munkamenet időtartalmát.',
        'remember_always' => 'Mindig',
        'remember_never' => 'Soha',
        'remember_ask' => 'Kérdezzen rá'
    ],
    'user' => [
        'label' => 'Felhasználó',
        'id' => 'Azonosító',
        'username' => 'Felhasználónév',
        'name' => 'Név',
        'name_empty' => 'Ismeretlen',
        'surname' => 'Családnév',
        'email' => 'E-mail cím',
        'created_at' => 'Regisztrált',
        'last_seen' => 'Belépve',
        'is_guest' => 'Vendég',
        'joined' => 'Csatlakozva',
        'is_online' => 'Elérhető',
        'is_offline' => 'Nem elérhető',
        'send_invite' => 'Üdvözlés küldése e-mailben',
        'send_invite_comment' => 'A kimenő levél tartalmazza a felhasználónevet és jelszót.',
        'create_password' => 'Jelszó megadása',
        'create_password_comment' => 'Kérjük használjon egyedi és erős jelszót.',
        'reset_password' => 'Új jelszó megadása',
        'reset_password_comment' => 'Kérjük használjon egyedi és erős jelszót.',
        'confirm_password' => 'Jelszó megerősítése',
        'confirm_password_comment' => 'Kérjük gépelje be újra a jelszót.',
        'groups' => 'Csoportok',
        'empty_groups' => 'Nincs létrehozva csoport.',
        'avatar' => 'Profilkép',
        'details' => 'Adatok',
        'account' => 'Fiók',
        'block_mail' => 'Az összes kimenő levél tiltása ennél a felhasználónál.',
        'status_guest' => 'Vendég',
        'status_activated' => 'Aktivált',
        'status_registered' => 'Regisztrált',
        'created_ip_address' => 'Létrehozott IP cím',
        'last_ip_address' => 'Legutóbbi IP cím'
    ],
    'group' => [
        'label' => 'Csoport',
        'id' => 'Azonosító',
        'name' => 'Név',
        'description_field' => 'Leírás',
        'code' => 'Kód',
        'code_comment' => 'Egyedi azonosító az API eléréshez.',
        'created_at' => 'Létrehozva',
        'users_count' => 'Felhasználók'
    ],
    'groups' => [
        'menu_label' => 'Csoportok',
        'all_groups' => 'Csoportok',
        'new_group' => 'Új csoport',
        'delete_selected_confirm' => 'Valóban törölni akarja a kijelölt csoportokat?',
        'list_title' => 'Csoportok kezelése',
        'delete_confirm' => 'Valóban törölni akarja ezt a csoportot?',
        'delete_selected_success' => 'A csoportok sikeresen eltávolításra kerültek.',
        'delete_selected_empty' => 'A törléshez előbb ki kell választania legalább egy csoportot.',
        'return_to_list' => 'Vissza a csoportokhoz',
        'return_to_users' => 'Vissza a felhasználókhoz',
        'create_title' => 'Csoport létrehozása',
        'update_title' => 'Csoport szerkesztése',
        'preview_title' => 'Csoport előnézete'
    ],
    'login' => [
        'attribute_email' => 'E-mail cím',
        'attribute_username' => 'Felhasználónév'
    ],
    'account' => [
        'account' => 'Fiók',
        'account_desc' => 'Felhasználó kezelési űrlap.',
        'banned' => 'Sajnáljuk, ez a felhasználói fiók nincs aktiválva. Kérjük vegye fel a kapcsolatot a weboldal üzemeltetőjével.',
        'redirect_to' => 'Átirányítás',
        'redirect_to_desc' => 'Az oldal neve az átirányításhoz frissítés, bejelentkezés vagy regisztrálás után.',
        'code_param' => 'Aktiválási kód',
        'code_param_desc' => 'A regisztrálás aktiválási kódjához használt oldal webcíme.',
        'force_secure' => 'Biztonságos protokoll kényszerítése',
        'force_secure_desc' => 'A webcím mindig legyen átírányítva HTTPS protokollra.',
        'invalid_user' => 'Nem található a megadott hitelesítési adatokkal rendelkező felhasználó.',
        'invalid_activation_code' => 'A megadott aktiválási kód érvénytelen.',
        'invalid_deactivation_pass' => 'A megadott jelszó érvénytelen.',
        'invalid_current_pass' => 'A megadott jelenlegi jelszó érvénytelen.',
        'success_activation' => 'A fiók aktiválása sikerült.',
        'success_deactivation' => 'Sikeresen felfüggesztette a fiókját. További szép napot kívánunk!',
        'success_saved' => 'Sikerült menteni a beállításokat!',
        'login_first' => 'Előbb be kell jelentkeznie!',
        'already_active' => 'Már aktiválta a fiókját!',
        'activation_email_sent' => 'Az aktiválási e-mail elküldése sikeresen megtörtént.',
        'activation_by_admin' => 'A regisztráció sikeresen megtörtént! A fiókja még nem aktív, azt a weboldal üzemeltetőjének még jóvá kell hagynia.',
        'registration_disabled' => 'A regisztráció jelenleg tiltva van az oldalon.',
        'registration_throttled' => 'Az újbóli regisztráció nem engedélyezett. Kérjük próbálja meg később.',
        'sign_in' => 'Bejelentkezés',
        'register' => 'Regisztráció',
        'full_name' => 'Teljes név',
        'email' => 'E-mail cím',
        'password' => 'Jelszó',
        'login' => 'Bejelentkezés',
        'new_password' => 'Új jelszó',
        'new_password_confirm' => 'Új jelszó megerősítése',
        'update_requires_password' => 'Biztonságos adatmódosítás',
        'update_requires_password_comment' => 'A profil megváltoztatásakor a rendszer elkéri a felhasználó jelenlegi jelszavát.'
    ],
    'reset_password' => [
        'reset_password' => 'Új jelszó megadása',
        'reset_password_desc' => 'Elfelejtett jelszó űrlap.',
        'code_param' => 'Visszaállító kód',
        'code_param_desc' => 'A visszaállító kódhoz használt oldal webcíme.'
    ],
    'session' => [
        'session' => 'Munkamenet',
        'session_desc' => 'Hozzáadja egy oldqalhoz a felhasználói munkamenetet és korlátozhatja az oldalhoz való hozzáférést.',
        'security_title' => 'Csak engedélyezés',
        'security_desc' => 'Ki számára engedélyezett a hozzáférés ehhez az oldalhoz.',
        'all' => 'Mindenki',
        'users' => 'Felhasználók',
        'guests' => 'Vendégek',
        'allowed_groups_title' => 'Csoportok engedélyezése',
        'allowed_groups_description' => 'Válassza ki az engedélyezni kívánt csoportokat vagy egyiket sem az összes elfogadásához.',
        'redirect_title' => 'Átirányítás',
        'redirect_desc' => 'Az átirányítandó oldal neve, ha a hozzáférés meg van tagadva.',
        'logout' => 'Sikeresen kijelentkezett!',
        'stop_impersonate_success' => 'Sikeresen visszajelentkezett az eredeti profiljába.'
    ]
];
