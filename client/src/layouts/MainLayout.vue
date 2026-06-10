<template>
  <q-layout view="lHh Lpr lFf">
    <!-- Хедер -->
    <q-header class="header">
      <q-toolbar class="container">
        <!-- Логотип слева -->
        <q-toolbar-title class="logo">
          <router-link to="/" class="logo-link">
            <img src="~assets/logo.svg" alt="Логотип" class="logo-img" />
          </router-link>
        </q-toolbar-title>

        <!-- Меню справа для десктопа -->
        <div class="desktop-menu q-gutter-md">
          <router-link to="/" class="menu-link" active-class="menu-link-active"
            >Главная</router-link
          >
          <a href="#activities" class="menu-link" @click.prevent="scrollTo('activities')"
            >Виды деятельности</a
          >
          <router-link to="/podcasts" class="menu-link">Подкасты</router-link>
          <a
            href="https://school-portal.ru"
            target="_blank"
            rel="noopener noreferrer"
            class="menu-link"
            >Школьный портал</a
          >
        </div>

        <!-- Кастомная кнопка бургер-меню -->
        <div v-if="$q.screen.lt.md" class="burger-btn" @click="mobileMenuOpen = !mobileMenuOpen">
          <span class="burger-line line-1"></span>
          <span class="burger-line line-2"></span>
          <span class="burger-line line-3"></span>
        </div>
      </q-toolbar>
    </q-header>

    <!-- Основной контент -->
    <q-page-container style="padding-top: 20px !important">
      <router-view />
    </q-page-container>

    <!-- Мобильное меню (полноэкранное) -->
    <div v-if="$q.screen.lt.md" class="mobile-menu-overlay" :class="{ open: mobileMenuOpen }">
      <div class="mobile-menu-header">
        <router-link to="/" class="mobile-logo-link" @click="mobileMenuOpen = false">
          <img src="~assets/logo.svg" alt="Логотип" class="mobile-logo-img" />
        </router-link>
        <div class="burger-btn mobile-close-btn" @click="mobileMenuOpen = false">
          <span class="burger-line line-1"></span>
          <span class="burger-line line-2"></span>
          <span class="burger-line line-3"></span>
        </div>
      </div>

      <div class="mobile-menu-content">
        <div class="mobile-menu-links">
          <router-link to="/" class="mobile-menu-link" @click="mobileMenuOpen = false">
            Главная
          </router-link>
          <a
            href="#activities"
            class="mobile-menu-link"
            @click.prevent="scrollToMobile('activities')"
          >
            Виды деятельности
          </a>
          <router-link to="/podcasts" class="mobile-menu-link" @click="mobileMenuOpen = false">
            Подкасты
          </router-link>
          <a
            href="https://school-portal.ru"
            target="_blank"
            rel="noopener noreferrer"
            class="mobile-menu-link"
            @click="mobileMenuOpen = false"
          >
            Школьный портал
          </a>
        </div>

        <div class="mobile-menu-footer">
          <div class="mobile-contacts">
            <div class="mobile-contact-title">Контакты</div>
            <div class="mobile-contact-text">
              Адрес: 614000, Пермский край, город Пермь, Сибирская ул., д. 17
            </div>
            <div class="mobile-contact-text">8 (347) 212-70-50</div>
            <div class="mobile-contact-text">do@perm.permkrai.ru</div>
          </div>
          <div class="mobile-social">
            <a href="https://maximum.ru" target="_blank" rel="noopener noreferrer">
              <q-img src="~assets/max-icon.svg" class="mobile-social-icon" fit="contain" />
            </a>
            <a href="https://vk.com" target="_blank" rel="noopener noreferrer">
              <q-img src="~assets/vk-icon.svg" class="mobile-social-icon" fit="contain" />
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Кнопка наверх -->
    <!-- <q-page-sticky position="bottom-right" :offset="[60, 60]">
      <q-btn round style="z-index: 99990000" @click="scrollToTop">
        <q-img src="~assets/Button_icon.svg" class="btn-icon" fit="contain" />
      </q-btn>
    </q-page-sticky> -->
    <!-- Кнопка наверх -->
    <div
      class="scroll-top-button"
      @click="scrollToTop"
      style="
        position: fixed;
        bottom: 60px;
        right: 60px;
        width: 56px;
        height: 56px;
        background: #fbe1ba;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        z-index: 999999;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
      "
    >
      <q-img
        src="~assets/Button_icon.svg"
        class="btn-icon"
        fit="contain"
        style="width: 50px; height: 50px"
      />
    </div>

    <!-- Футер -->
    <div class="footer-section" :class="{ 'podcasts-footer': $route.path === '/podcasts' }">
      <div class="footer-container">
        <div class="footer-grid">
          <!-- Колонка 1: Логотип -->
          <div class="footer-col">
            <div class="footer-logo">
              <img src="~assets/logo.svg" alt="Логотип" class="footer-logo-img" />
            </div>
            <div class="footer-logo-text">
              © 2026 Муниципальное автономное общеобразовательное учреждение «Средняя
              общеобразовательная школа «Мастерград» города Перми
            </div>
          </div>

          <!-- Колонка 2: Ссылки -->
          <div class="footer-col">
            <div class="footer-links">
              <a href="/" class="footer-link">Главная</a>
              <a href="#podcasts" class="footer-link">Подкасты</a>
              <a href="#activities" class="footer-link">Школьный портал</a>
            </div>
          </div>

          <!-- Колонка 3: Ссылки -->
          <div class="footer-col">
            <div class="footer-links">
              <a href="/about" class="footer-link">Учебная деятельность</a>
              <a href="/contacts" class="footer-link">Внеурочная деятельность</a>
              <a href="/privacy" class="footer-link">Дополнительное образование</a>
            </div>
          </div>

          <!-- Колонка 4: Соцсети -->
          <div class="footer-col footer-col-right">
            <div class="footer-title">Контакты</div>
            <div class="footer-addres">
              Адрес: 614000, Пермский край, город Пермь, Сибирская ул., д. 17
            </div>
            <div class="footer-addres">8 (347) 212-70-50</div>
            <div class="footer-addres">do@perm.permkrai.ru</div>
            <div class="footer-social">
              <a
                href="https://maximum.ru"
                target="_blank"
                rel="noopener noreferrer"
                class="social-link"
              >
                <q-img src="~assets/max-icon.svg" class="social-icon" fit="contain" />
              </a>
              <a
                href="https://vk.com"
                target="_blank"
                rel="noopener noreferrer"
                class="social-link"
              >
                <q-img src="~assets/vk-icon.svg" class="social-icon" fit="contain" />
              </a>
            </div>
          </div>
          <div class="footer-col">
            <div class="footer-logo-text-mobile">
              © 2026 Муниципальное автономное общеобразовательное учреждение «Средняя
              общеобразовательная школа «Мастерград» города Перми
            </div>
          </div>
        </div>

        <!-- Нижняя строка с копирайтом -->
        <div class="footer-partners">
          <div class="footer-bottom">
            <div class="footer-partner-text">Сделано в:</div>
            <q-img src="~assets/souz.svg" class="partner-1" fit="contain" />
            <q-img src="~assets/sot.svg" class="partner-2" fit="contain" />
          </div>
        </div>
      </div>
    </div>
  </q-layout>
</template>

<script setup lang="ts">
import { ref, watch } from 'vue';
import { useRoute, useRouter } from 'vue-router';
import { useQuasar } from 'quasar';

const $q = useQuasar();
const route = useRoute();
const router = useRouter();
const mobileMenuOpen = ref(false);

// Функция для плавного скролла к секции на текущей странице
const scrollTo = (sectionId: string) => {
  const element = document.getElementById(sectionId);
  if (element) {
    element.scrollIntoView({ behavior: 'smooth', block: 'start' });
  }
};

// Функция для мобильного меню с проверкой страницы
const scrollToMobile = (sectionId: string) => {
  mobileMenuOpen.value = false;

  // Если мы на главной странице
  if (route.path === '/') {
    const element = document.getElementById(sectionId);
    if (element) {
      element.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
  } else {
    // Если на другой странице — переходим на главную с якорем
    void router.push(`/#${sectionId}`);
  }
};

// Открытие внешней ссылки
// const openExternalLink = (url: string) => {
//   window.open(url, '_blank', 'noopener,noreferrer');
// };

const scrollToTop = () => {
  window.scrollTo({
    top: 0,
    behavior: 'smooth',
  });
};

// Закрываем меню при смене маршрута
watch(
  () => route.path,
  () => {
    mobileMenuOpen.value = false;
  },
);
</script>

<style scoped lang="scss">
.header {
  background-color: white !important;
  box-shadow: none !important;
  border-bottom: none !important;
  color: #131314;
  padding: 8px 0;
  position: relative;
  z-index: 100;
}

.container {
  max-width: 1600px;
  width: 100%;
  margin: 0 auto;
  padding: 0 24px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.logo {
  padding: 0;
  flex: 1;
}

.logo-link {
  display: flex;
  align-items: center;
  gap: 12px;
  text-decoration: none;
  color: #131314;
}

.logo-img {
  height: 80px;
  width: auto;
}

// Кастомная кнопка бургер-меню
.burger-btn {
  width: 30px;
  height: 18px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  cursor: pointer;
  z-index: 200;
  position: relative;

  .burger-line {
    display: block;
    height: 2px;
    background-color: #131314;
    border-radius: 3px;
    transition: all 0.3s ease;
  }

  .line-1 {
    width: 30px;
  }

  .line-2 {
    width: 23px;
    align-self: flex-end;
  }

  .line-3 {
    width: 15px;
    align-self: flex-end;
  }
}

// Полноэкранное мобильное меню
.mobile-menu-overlay {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: white;
  z-index: 150;
  opacity: 0;
  visibility: hidden;
  transition: all 0.3s ease;

  &.open {
    opacity: 1;
    visibility: visible;
  }
}

.mobile-menu-header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 8px 24px;
  min-height: 72px; // Фиксированная высота как у хедера
}

.mobile-logo-link {
  display: flex;
  align-items: center;
  text-decoration: none;
}

.mobile-logo-img {
  height: 80px;
  width: auto;
}

.mobile-close-btn {
  position: static;
  transform: none;
  margin: 0; // Добавьте
  padding: 0; // Добавьте
}

.mobile-menu-content {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  height: calc(100% - 80px);
  padding: 40px 24px 50px;
}

.mobile-menu-links {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 32px;
}

.mobile-menu-link {
  font-family: 'Mulish', sans-serif;
  font-size: 32px;
  font-weight: 700;
  color: #131314;
  text-decoration: none;
  transition: opacity 0.2s ease;

  &:hover {
    opacity: 0.7;
  }
}

.mobile-menu-footer {
  text-align: center;
}

.mobile-contacts {
  margin-bottom: 20px;
}

.mobile-contact-title {
  font-family: 'Mulish', sans-serif;
  font-size: 20px;
  font-weight: 700;
  color: #505468;
  margin-bottom: 16px;
}

.mobile-contact-text {
  font-family: 'Mulish', sans-serif;
  font-size: 14px;
  font-weight: 400;
  color: #4b5563;
  margin-bottom: 8px;
}

.mobile-social {
  display: flex;
  justify-content: center;
  gap: 12px;
}

.mobile-social-icon {
  width: 40px;
  height: 40px;
}

// Десктопное меню
.desktop-menu {
  display: flex;
  gap: 32px;
}

.menu-link {
  font-family: 'Mulish', sans-serif;
  font-weight: 400;
  font-size: 20px;
  color: #131314;
  text-decoration: none;
  transition: opacity 0.2s ease;
  cursor: pointer;
  background: none;
  border: none;
  padding: 0;
}

.menu-link:hover {
  opacity: 0.7;
}

.menu-link-active {
  padding-bottom: 4px;
}

// Мобильные стили для бургера
@media (max-width: 1023px) {
  .desktop-menu {
    display: none;
  }

  .burger-btn {
    display: flex;
  }
}

@media (min-width: 1024px) {
  .burger-btn {
    display: none !important;
  }
}

// Футер
.footer-section {
  background: #ffffff;
  padding: 60px 24px 30px;
  margin-top: 60px;
}

.podcasts-footer {
  background: #dce0f4;
  border-radius: 100px 100px 0px 0px;
}

.footer-container {
  max-width: 1600px;
  margin: 0 auto;
}

.footer-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 40px;
  margin-bottom: 50px;
}

.footer-col {
  display: flex;
  flex-direction: column;
}

.footer-logo {
  display: flex;
  align-items: center;
  gap: 12px;
}

.footer-logo-img {
  height: 100px;
  width: auto;
}

.footer-logo-text {
  font-family: 'Mulish', sans-serif;
  font-size: 14px;
  font-weight: 400;
  color: #4b5563;
  line-height: 40px;
  max-width: 350px;
}
.footer-logo-text-mobile {
  display: none;
}

.footer-links {
  display: flex;
  flex-direction: column;
  gap: 16px;
}

.footer-link {
  font-family: 'Mulish', sans-serif;
  font-size: 20px;
  font-weight: 400;
  color: #131314;
  text-decoration: none;
  transition: color 0.3s ease;

  &:hover {
    color: #f5a623;
  }
}

.footer-social {
  display: flex;
  flex-direction: row;
  gap: 12px;
}

.social-link {
  display: flex;
  align-items: center;
  gap: 12px;
  font-family: 'Mulish', sans-serif;
  font-size: 16px;
  font-weight: 400;
  color: #c4c4c4;
  text-decoration: none;
  transition: color 0.3s ease;

  &:hover {
    color: #f5a623;
  }
}

.social-icon {
  width: 40px;
  height: 40px;
  margin-top: 10px;
}

.footer-partners {
  border-top: 1px solid #dce0f4;
}

.footer-bottom {
  max-width: 350px;
  padding-top: 30px;
  display: flex;
  justify-content: center !important;
  gap: 8px;
  align-items: center;
  margin: 0 auto;
}

.footer-partner-text {
  width: 85px;
  font-family: 'Mulish', sans-serif;
  font-size: 16px;
  font-weight: 400;
  color: #8f8f9a;
}

.footer-col-right {
  text-align: right;
  align-items: flex-end;
}

.footer-title {
  font-family: Mulish;
  font-weight: 700;
  font-size: 28px;
  color: #505468;
  margin-bottom: 16px;
}

.footer-addres {
  font-family: Mulish;
  font-weight: 400;
  font-size: 16px;
  color: #4b5563;
  padding-bottom: 6px;
}

.partner-1 {
  width: 170px;
  height: auto;
}

.partner-2 {
  width: 68px;
  height: 40px;
  margin-left: 8px;
}

.btn-icon {
  width: 50px;
  height: 50px;
}

// Адаптив для планшетов
@media (max-width: 1024px) {
  .footer-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 40px;
  }
}

// Адаптив для мобильных
@media (max-width: 768px) {
  .logo-img {
    height: 55px;
    width: auto;
  }

  .scroll-top-button {
    bottom: 20px !important;
    right: 20px !important;
  }

  .footer-section {
    padding: 40px 40px 25px;
  }

  .footer-grid {
    // grid-template-columns: 1fr;
    gap: 60px;
  }

  .footer-grid .footer-col:nth-child(2),
  .footer-col:nth-child(3) {
    display: none;
  }

  .footer-logo {
    justify-content: left;
    padding-bottom: 40px;
  }

  .footer-logo-text {
    font-size: 12px;
    line-height: 16px;
  }

  .footer-links {
    align-items: center;
    text-align: center;
  }

  .footer-col-right[data-v-22686b16] {
    text-align: left;
    align-items: flex-start;
  }
  .footer-social {
    align-items: center;
  }

  .mobile-menu-link {
    font-size: 24px;
  }

  .mobile-menu-content {
    padding: 30px 20px 40px;
  }

  .mobile-menu-header {
    padding: 0px 24px;
  }

  .mobile-logo-img {
    height: 55px;
  }
}

.mobile-drawer {
  background: white;
  .q-item {
    font-family: 'Mulish', sans-serif;
    font-weight: 600;
    color: #131314;
  }
}

@media (max-width: 480px) {
  .scroll-top-button {
    bottom: 12px !important;
    right: 12px !important;
  }
  .podcasts-footer[data-v-22686b16] {
    border-radius: 40px 40px 0px 0px;
  }
  .footer-section[data-v-22686b16] {
    padding: 40px 20px 25px;
  }
  .footer-grid {
    display: flex;
    flex-direction: column;
    gap: 30px;
  }
  .footer-logo[data-v-22686b16] {
    padding-bottom: 0px;
  }
  .footer-logo-text {
    display: none;
  }
  .footer-logo-text-mobile {
    display: block;
    font-family: 'Mulish', sans-serif;
    font-weight: 400;
    color: #4b5563;
    font-size: 12px;
    line-height: 16px;
  }

  // Колонка 1: Логотип (первая)
  .footer-col:nth-child(1) {
    order: 0;
  }

  // Колонка 4: Контакты (вторая)
  .footer-col:nth-child(5) {
    order: 2;
  }

  // Блок с копирайтом (третий)
  .footer-partners {
    order: 3;
  }
}
</style>
