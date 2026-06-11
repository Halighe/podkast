<template>
  <div class="error-page">
    <!-- Фоновое изображение с адаптивом -->
    <picture class="error-bg">
      <source media="(max-width: 480px)" srcset="~assets/phone_404.svg" />
      <source media="(max-width: 1024px)" srcset="~assets/tablet_404.svg" />
      <source media="(min-width: 1025px)" srcset="~assets/desktop_404.svg" />
      <img src="~assets/desktop_404.svg" alt="404 background" class="error-bg-img" />
    </picture>

    <!-- Контент -->
    <div class="error-container">
      <div class="error-title">Такой страницы <br> не существует</div>
      <q-btn unelevated class="error-btn" no-caps @click="goToHome">
        <span class="btn-content">
          На главную
          <q-img src="~assets/arrow-right.svg" class="btn-arrow" fit="contain" />
        </span>
      </q-btn>
    </div>
  </div>
</template>

<script setup lang="ts">
import { useRouter } from 'vue-router';

const router = useRouter();

const goToHome = () => {
  router.push('/');
};
</script>

<style scoped lang="scss">
.error-page {
  position: relative;
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
}

.error-bg {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 0;
}

.error-bg-img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center;
}

.error-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.3);
  z-index: 1;
}

.error-container {
  position: relative;
  z-index: 2;
  text-align: center;
  padding: 24px;
  max-width: 460px;
}

.error-title {
  font-family: 'Mulish', sans-serif;
  font-size: 40px;
  font-weight: 700;
  color: #505468;
  margin-bottom: 40px;
  line-height: 1.2;
}

.error-btn {
  background: #fbe1ba;
  color: #6f552e;
  font-family: 'Mulish', sans-serif;
  font-size: 20px;
  font-weight: 500;
  padding: 14px 40px;
  border-radius: 50px;
  transition: all 0.3s ease;
  min-width: 200px;

  &:hover {
    background: #fbc6ba;
    transform: translateY(-2px);
  }
  .btn-arrow {
    width: 24px;
    height: 24px;
  }
}

// Адаптив для планшетов
@media (max-width: 1024px) {
  .error-title {
    font-size: 36px;
  }

  .error-btn {
    font-size: 18px;
    padding: 12px 32px;
  }
  .error-page[data-v-0062ec30] {
    align-items: flex-end;
  }
  .error-container {
    margin-bottom: 100px;
  }
}

// Адаптив для мобильных
@media (max-width: 768px) {
  .error-title {
    font-size: 28px;
    margin-bottom: 30px;
  }

  .error-btn {
    font-size: 16px;
    padding: 10px 28px;
    min-width: 160px;
  }
}

@media (max-width: 480px) {
  .error-title {
    font-size: 24px;
    margin-bottom: 24px;
  }

  .error-btn {
    font-size: 14px;
    padding: 8px 24px;
  }
  .error-container {
    margin-bottom: 200px;
  }
}
</style>
