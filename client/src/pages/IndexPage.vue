<template>
  <q-page>
    <!-- Hero секция (вне q-card, на всю ширину) -->
    <div class="hero-section">
      <!-- Фоновое изображение через q-img -->
      <q-img src="~assets/orig 1.svg" class="hero-bg" fit="cover" :no-native-menu="true">
        <!-- Затемнение (опционально) -->
      </q-img>

      <!-- Контент поверх фона -->
      <div class="hero-content-wrapper">
        <div class="hero-content">
          <q-img
            src="~assets/png.svg"
            class="hero-center-img"
            fit="contain"
            :no-native-menu="true"
            :no-spinner="false"
          />
          <div class="hero-topic-wrapper">
            <div class="hero-topic">Профориентация школьников</div>
            <div class="hero-text">
              демонстрация возможностей школы, систематизация и представление информации
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Основной контент в q-card -->
    <div class="main-content-wrapper">
      <q-card class="main-card" flat>
        <q-card-section>
          <!-- Блок "Пространство для детей, родителей и педагогов" с фоновой картинкой -->
          <div class="space-section">
            <!-- Фоновая картинка на всю ширину -->
            <!-- <div class="space-bg"></div> -->

            <div class="space-content-wrapper">
              <div class="space-content">
                <!-- Картинка слева -->
                <div class="space-image">
                  <picture>
                    <source media="(max-width: 480px)" srcset="~assets/Frame2131330347.svg" />
                    <source media="(max-width: 768px)" srcset="~assets/mobile-image.svg" />
                    <source media="(min-width: 769px)" srcset="~assets/Frame2131330347.svg" />
                    <img
                      src="~assets/Frame2131330347.svg"
                      class="space-img"
                      alt="Пространство для детей, родителей и педагогов"
                    />
                  </picture>
                </div>

                <!-- Текст по левому краю -->
                <div class="space-text">
                  <div class="space-title">Пространство для детей, родителей и педагогов</div>
                  <div class="space-description">
                    Повышение информированности о существующих программах, проектах и мероприятиях,
                    направленных на профессиональное самоопределение.
                  </div>
                </div>
              </div>
              <!-- Блок с преимуществами -->
              <div class="advantages-section">
                <div class="row q-col-gutter-lg">
                  <!-- Первая колонка: картинка сверху, текст снизу -->
                  <div class="col-12 col-md-6">
                    <div class="advantage-card">
                      <div class="advantage-image">
                        <q-img
                          src="~assets/Vector.svg"
                          class="advantage-img"
                          fit="contain"
                          :no-native-menu="true"
                        />
                      </div>
                      <div class="advantage-description">
                        Обеспечение лёгкого доступа к актуальной информации о возможностях развития
                        в рамках учебной, внеурочной и дополнительной деятельности
                      </div>
                      <div class="advantage-row" id="row-block">
                        <!-- Первая картинка слева -->
                        <div class="advantage-icon-left">
                          <q-img
                            src="~assets/Vector 1.svg"
                            class="advantage-icon"
                            fit="contain"
                            :no-native-menu="true"
                          />
                        </div>

                        <!-- Текст по центру -->
                        <div class="advantage-text">
                          <div class="advantage-description">
                            демонстрация опыта школы к выбору будущей профессии
                          </div>
                        </div>

                        <!-- Вторая картинка справа -->
                        <div class="advantage-icon-right">
                          <q-img
                            src="~assets/Vector 2.svg"
                            class="advantage-icon"
                            fit="contain"
                            :no-native-menu="true"
                          />
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Вторая колонка: две картинки в строку -->
                  <div class="col-12 col-md-6 advantages-second-col">
                    <div class="row q-col-gutter-md">
                      <div class="col-6">
                        <div class="advantage-image-small">
                          <q-img
                            src="~assets/Frame 2131330350.svg"
                            class="advantage-img-small"
                            fit="contain"
                            :no-native-menu="true"
                          />
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="advantage-image-small">
                          <q-img
                            src="~assets/Frame 2131330349.svg"
                            class="advantage-img-small"
                            fit="contain"
                            :no-native-menu="true"
                          />
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="advantage-tab">
                    <div class="advantage-tab-col-1">
                      <div class="advantage-row">
                        <!-- Первая картинка слева -->
                        <div class="advantage-icon-left">
                          <q-img
                            src="~assets/Vector 1.svg"
                            class="advantage-icon"
                            fit="contain"
                            :no-native-menu="true"
                          />
                        </div>

                        <!-- Текст по центру -->
                        <div class="advantage-text">
                          <div class="advantage-description">
                            демонстрация опыта школы к выбору будущей профессии
                          </div>
                        </div>

                        <!-- Вторая картинка справа -->
                        <div class="advantage-icon-right">
                          <q-img
                            src="~assets/Vector 2.svg"
                            class="advantage-icon"
                            fit="contain"
                            :no-native-menu="true"
                          />
                        </div>
                      </div>

                      <div class="advantage-image-small">
                        <q-img
                          src="~assets/png-tab.svg"
                          class="advantage-img-small"
                          fit="contain"
                          :no-native-menu="true"
                        />
                      </div>
                    </div>

                    <div class="advantage-tab-col-2">
                      <div class="advantage-image-small">
                        <q-img
                          src="~assets/Frame 2131330349-tab.svg"
                          class="advantage-img-small"
                          fit="contain"
                          :no-native-menu="true"
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </q-card-section>
      </q-card>
    </div>

    <!-- Секция "Виды деятельности" -->
    <div id="activities" class="activities-section">
      <div class="activities-title">Виды деятельности</div>

      <div class="activities-slider">
        <div class="activities-oval">
          <!-- Переключатель 1 -->
          <div
            class="activity-switch"
            :class="{ active: activeActivity === 'study' }"
            @click="activeActivity = 'study'"
          >
            <q-img src="~assets/activity-1.svg" class="activity-icon" fit="contain" />
            <span class="activity-text">Учебная деятельность</span>
          </div>

          <!-- Переключатель 2 -->
          <div
            class="activity-switch"
            :class="{ active: activeActivity === 'extracurricular' }"
            @click="activeActivity = 'extracurricular'"
          >
            <q-img src="~assets/activity-2.svg" class="activity-icon" fit="contain" />
            <span class="activity-text">Внеурочная деятельность</span>
          </div>

          <!-- Переключатель 3 -->
          <div
            class="activity-switch"
            :class="{ active: activeActivity === 'additional' }"
            @click="activeActivity = 'additional'"
          >
            <q-img src="~assets/activity-3.svg" class="activity-icon" fit="contain" />
            <span class="activity-text">Дополнительная деятельность</span>
          </div>
        </div>
      </div>

      <!-- Контент, который меняется при переключении -->
      <div class="activities-content">
        <!-- Учебная деятельность -->
        <div v-if="activeActivity === 'study'" class="activity-content">
          <div class="cards-grid">
            <div v-for="card in studyCards" :key="card.id" class="activity-card card-1">
              <div class="card-header">
                <q-img :src="card.icon" class="card-icon" fit="contain" />
                <div class="card-title">{{ card.title }}</div>
              </div>
              <div class="card-text" v-html="card.description"></div>
              <div class="card-files">
                <div class="files-info">
                  <div class="docs-link">
                    <q-img src="~assets/SVG.svg" class="docs-icon" fit="contain" />
                    <span>Документы</span>
                  </div>
                  <span class="files-count"
                    >{{ card.documents.length }} {{ declensionFiles(card.documents.length) }}</span
                  >
                </div>
                <div class="files-list">
                  <!-- Отображаем только первые 3 файла или все, если showAll -->
                  <div
                    v-for="doc in getVisibleFiles(card.documents, card.id, 'study')"
                    :key="doc.id"
                    class="file-item"
                  >
                    <div class="file-info">
                      <q-img
                        :src="
                          doc.file_path.toLowerCase().endsWith('.pdf')
                            ? 'src/assets/icon-pdf.svg'
                            : 'src/assets/icon-docx.svg'
                        "
                        class="file-icon"
                        fit="contain"
                      />
                      <div class="file-details">
                        <span class="file-name" :title="doc.original_name">{{
                          doc.original_name
                        }}</span>
                        <span class="file-size"
                          >{{ getFileExtension(doc.file_path) }} •
                          {{ formatFileSize(doc.file_size) }}</span
                        >
                      </div>
                    </div>
                    <a :href="doc.file_path" download target="_blank" class="download-link">
                      <q-img src="~assets/icon_download.svg" class="download-icon" fit="contain" />
                    </a>
                  </div>

                  <!-- Кнопка "Показать больше / Скрыть" -->
                  <div v-if="hasMoreFiles(card.documents)" class="show-more-files">
                    <q-btn
                      flat
                      dense
                      no-caps
                      class="show-more-files-btn"
                      @click="toggleShowAllFiles(card.id, 'study')"
                    >
                      <span class="btn-label">
                        {{ showAllFilesMap[`${card.id}_study`] ? 'Скрыть' : 'Показать больше' }}
                        <q-img
                          :src="
                            showAllFilesMap[`${card.id}_study`]
                              ? 'src/assets/show-less.svg'
                              : 'src/assets/show-more.svg'
                          "
                          class="btn-arrow-img"
                          fit="contain"
                        />
                      </span>
                    </q-btn>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Внеурочная деятельность -->
        <div v-else-if="activeActivity === 'extracurricular'" class="activity-content">
          <div class="cards-grid">
            <div v-for="card in extracurricularCards" :key="card.id" class="activity-card card-2">
              <div class="card-header">
                <q-img :src="card.icon" class="card-icon" fit="contain" />
                <div class="card-title">{{ card.title }}</div>
              </div>
              <div class="card-text" v-html="card.description"></div>
              <div class="card-files">
                <div class="files-info">
                  <div class="docs-link">
                    <q-img src="~assets/SVG.svg" class="docs-icon" fit="contain" />
                    <span>Документы</span>
                  </div>
                  <span class="files-count"
                    >{{ card.documents.length }} {{ declensionFiles(card.documents.length) }}</span
                  >
                </div>
                <div class="files-list">
                  <!-- Отображаем только первые 3 файла или все, если showAll -->
                  <div
                    v-for="doc in getVisibleFiles(card.documents, card.id, 'extracurricular')"
                    :key="doc.id"
                    class="file-item"
                  >
                    <div class="file-info">
                      <q-img
                        :src="
                          doc.file_path.toLowerCase().endsWith('.pdf')
                            ? 'src/assets/icon-pdf.svg'
                            : 'src/assets/icon-docx.svg'
                        "
                        class="file-icon"
                        fit="contain"
                      />
                      <div class="file-details">
                        <span class="file-name" :title="doc.original_name">{{
                          doc.original_name
                        }}</span>
                        <span class="file-size"
                          >{{ getFileExtension(doc.file_path) }} •
                          {{ formatFileSize(doc.file_size) }}</span
                        >
                      </div>
                    </div>
                    <a :href="doc.file_path" download target="_blank" class="download-link">
                      <q-img
                        src="src/assets/icon_download.svg"
                        class="download-icon"
                        fit="contain"
                      />
                    </a>
                  </div>

                  <!-- Кнопка "Показать больше / Скрыть" -->
                  <div v-if="hasMoreFiles(card.documents)" class="show-more-files">
                    <q-btn
                      flat
                      dense
                      no-caps
                      class="show-more-files-btn"
                      @click="toggleShowAllFiles(card.id, 'extracurricular')"
                    >
                      <span class="btn-label">
                        {{
                          showAllFilesMap[`${card.id}_extracurricular`]
                            ? 'Скрыть'
                            : 'Показать больше'
                        }}
                        <q-img
                          :src="
                            showAllFilesMap[`${card.id}_extracurricular`]
                              ? 'src/assets/show-less.svg'
                              : 'src/assets/show-more.svg'
                          "
                          class="btn-arrow-img"
                          fit="contain"
                        />
                      </span>
                    </q-btn>
                  </div>
                </div>
              </div>
            </div>
            <!-- Если карточек нет -->
            <div v-if="extracurricularCards.length === 0" class="empty-state">
              <div class="text-center q-pa-xl">
                <div class="text-h6 text-grey-7">Нет данных для внеурочной деятельности</div>
              </div>
            </div>
          </div>
        </div>

        <!-- Дополнительная деятельность -->
        <div v-else-if="activeActivity === 'additional'" class="activity-content">
          <div class="cards-grid">
            <div v-for="card in additionalCards" :key="card.id" class="activity-card card-3">
              <div class="card-header">
                <q-img :src="card.icon" class="card-icon" fit="contain" />
                <div class="card-title">{{ card.title }}</div>
              </div>
              <div class="card-text" v-html="card.description"></div>
              <div class="card-files">
                <div class="files-info">
                  <div class="docs-link">
                    <q-img src="~assets/SVG.svg" class="docs-icon" fit="contain" />
                    <span>Документы</span>
                  </div>
                  <span class="files-count"
                    >{{ card.documents.length }} {{ declensionFiles(card.documents.length) }}</span
                  >
                </div>
                <div class="files-list">
                  <div
                    v-for="doc in getVisibleFiles(card.documents, card.id, 'additional')"
                    :key="doc.id"
                    class="file-item"
                  >
                    <div class="file-info">
                      <q-img
                        :src="
                          doc.file_path.toLowerCase().endsWith('.pdf')
                            ? 'src/assets/icon-pdf.svg'
                            : 'src/assets/icon-docx.svg'
                        "
                        class="file-icon"
                        fit="contain"
                      />
                      <div class="file-details">
                        <span class="file-name" :title="doc.original_name">{{
                          doc.original_name
                        }}</span>
                        <span class="file-size"
                          >{{ getFileExtension(doc.file_path) }} •
                          {{ formatFileSize(doc.file_size) }}</span
                        >
                      </div>
                    </div>
                    <a :href="doc.file_path" download target="_blank" class="download-link">
                      <q-img
                        src="src/assets/icon_download.svg"
                        class="download-icon"
                        fit="contain"
                      />
                    </a>
                  </div>

                  <div v-if="hasMoreFiles(card.documents)" class="show-more-files">
                    <q-btn
                      flat
                      dense
                      no-caps
                      class="show-more-files-btn"
                      @click="toggleShowAllFiles(card.id, 'additional')"
                    >
                      <span class="btn-label">
                        {{
                          showAllFilesMap[`${card.id}_additional`] ? 'Скрыть' : 'Показать больше'
                        }}
                        <q-img
                          :src="
                            showAllFilesMap[`${card.id}_additional`]
                              ? 'src/assets/show-less.svg'
                              : 'src/assets/show-more.svg'
                          "
                          class="btn-arrow-img"
                          fit="contain"
                        />
                      </span>
                    </q-btn>
                  </div>
                </div>
              </div>
            </div>
            <div v-if="additionalCards.length === 0" class="empty-state">
              <div class="text-center q-pa-xl">
                <div class="text-h6 text-grey-7">Нет данных для дополнительной деятельности</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Секция "Подкасты" -->
    <div id="podcasts" class="podcasts-section">
      <div class="podcasts-container">
        <div class="podcasts-title">Подкасты</div>
        <div class="podcasts-description">
          Разнообразные образовательные программы для всестороннего развития каждого ученика
        </div>

        <!-- Сетка карточек подкастов -->
        <div class="podcasts-grid">
          <div v-for="(podcast, index) in visiblePodcasts" :key="index" class="podcast-card">
            <div class="podcast-image">
              <q-img
                :src="podcast.cover_image || '~assets/video.svg'"
                class="podcast-img"
                fit="cover"
                :no-native-menu="true"
              />
              <div class="play-button" @click="playPodcast(podcast)">
                <q-img src="~assets/play-icon.svg" class="play-icon" fit="contain" />
              </div>
            </div>
            <div class="podcast-title">{{ podcast.title }}</div>
            <!-- <div class="podcast-author">{{ podcast.author }}</div> -->
          </div>
        </div>

        <!-- Кнопка "Показать больше" -->
        <div v-if="hasMorePodcasts" class="show-more-wrapper">
          <q-btn
            unelevated
            class="show-more-btn"
            no-caps
            :loading="loadingMore"
            @click="loadMorePodcasts"
          >
            <span class="btn-content">
              Показать больше
              <q-img src="~assets/arrow-right.svg" class="btn-icon" fit="contain" />
            </span>
          </q-btn>
        </div>
      </div>
    </div>

    <!-- Модальное окно для видео -->
    <q-dialog v-model="videoDialogVisible" persistent class="video-dialog">
      <div class="video-modal-wrapper">
        <div class="video-modal-close" @click="closeVideoDialog">
          <q-icon name="close" size="24px" />
        </div>
        <div class="video-modal">
          <div class="video-container" v-html="currentEmbedCode"></div>
        </div>
      </div>
    </q-dialog>
  </q-page>
</template>

<script setup lang="ts">
import { ref, computed, onMounted } from 'vue';
import { useQuasar } from 'quasar';

import { api } from 'src/boot/axios';

import studyIcon from 'src/assets/icon-study.svg'
import extracurricularIcon from 'src/assets/icon-gear.svg'
import additionalIcon from 'src/assets/icon-turtle.svg'

const $q = useQuasar();

const activeActivity = ref('study');
const loadingMore = ref(false);
const videoDialogVisible = ref(false);
const loadingPodcasts = ref(false); // Для индикации загрузки

// Интерфейс для документа
interface Document {
  id: number;
  original_name: string;
  file_path: string;
  file_size: number;
  sort_order: number;
  created_at: string;
  updated_at: string;
}

// Интерфейс для активности
interface Activity {
  id: number;
  type: 'study' | 'extracurricular' | 'additional';
  icon: 'study' | 'extracurricular' | 'additional'
  slug: string;
  title: string;
  description: string;
  assignment_text: string;
  sort_order: number;
  documents: Document[];
}

// Интерфейс для карточки (адаптированный под ваш текущий UI)
interface ActivityCard {
  id: number;
  title: string;
  description: string;
  documents: Document[];
  icon: string; // иконка для карточки
}

// Данные активностей из API
const allActivities = ref<Activity[]>([]);

// Загрузка для активностей
const loadingActivities = ref(false);

// Активные карточки для текущего типа деятельности
const studyCards = ref<ActivityCard[]>([]);
const extracurricularCards = ref<ActivityCard[]>([]);
const additionalCards = ref<ActivityCard[]>([]);

// Данные подкастов из API
interface Podcast {
  id: number;
  title: string;
  vk_url: string;
  cover_image: string;
  sort_order: number;
  createdAt: string;
}

const iconMap: Record<Activity['icon'], string> = {
  study: studyIcon,
  extracurricular: extracurricularIcon,
  additional: additionalIcon,
}
const defaultIcon = studyIcon

const mapCards = (items: Activity[]): ActivityCard[] => {
  return items.map((item) => ({
    id: item.id,
    title: item.title,
    description: item.description,
    documents: item.documents,
    icon: iconMap[item.icon] ?? defaultIcon,
  }))
}

// Функция для получения активностей с API
const fetchActivities = async () => {
  loadingActivities.value = true

  try {
    const response = await api.get('/activities')
    allActivities.value = response.data

    const activitiesByType = {
      study: allActivities.value.filter((a) => a.type === 'study'),
      extracurricular: allActivities.value.filter((a) => a.type === 'extracurricular'),
      additional: allActivities.value.filter((a) => a.type === 'additional'),
    }

    studyCards.value = mapCards(activitiesByType.study)
    extracurricularCards.value = mapCards(activitiesByType.extracurricular)
    additionalCards.value = mapCards(activitiesByType.additional)

    console.log('Активности загружены:', allActivities.value)
  } catch (error) {
    console.error('Ошибка при загрузке активностей:', error)

    $q.notify({
      message: 'Не удалось загрузить виды деятельности',
      color: 'negative',
      position: 'top',
      icon: 'error',
    })
  } finally {
    loadingActivities.value = false
  }
}

// Форматирование размера файла
const formatFileSize = (bytes: number): string => {
  if (bytes === 0) return '0 Bytes';
  const k = 1024;
  const sizes = ['Bytes', 'KB', 'MB', 'GB'];
  const i = Math.floor(Math.log(bytes) / Math.log(k));
  return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
};

// Получение расширения файла
const getFileExtension = (filePath: string): string => {
  const extension = filePath.split('.').pop()?.toUpperCase() || '';
  return extension;
};

// Склонение слова "файл"
const declensionFiles = (count: number): string => {
  if (count % 10 === 1 && count % 100 !== 11) return 'файл';
  if (count % 10 >= 2 && count % 10 <= 4 && (count % 100 < 10 || count % 100 >= 20)) return 'файла';
  return 'файлов';
};

// Для каждого типа деятельности свой лимит отображаемых файлов
const visibleFilesLimit = ref(3);

// Объект для отслеживания состояния показа файлов для каждой карточки
// Ключ: `${cardId}_${activityType}`, значение: boolean (показаны ли все файлы)
const showAllFilesMap = ref<Record<string, boolean>>({});

// Функция для переключения показа всех файлов
const toggleShowAllFiles = (cardId: number, activityType: string) => {
  const key = `${cardId}_${activityType}`;
  showAllFilesMap.value[key] = !showAllFilesMap.value[key];
};

// Функция для получения видимых файлов
const getVisibleFiles = (documents: Document[], cardId: number, activityType: string) => {
  const key = `${cardId}_${activityType}`;
  const showAll = showAllFilesMap.value[key] || false;

  if (showAll) {
    return documents;
  }
  return documents.slice(0, visibleFilesLimit.value);
};

// Функция для проверки, нужно ли показывать кнопку "Показать больше"
const hasMoreFiles = (documents: Document[]) => {
  return documents.length > visibleFilesLimit.value;
};
const allPodcasts = ref<Podcast[]>([]);

// Количество подкастов для отображения (начальные 6 = 2 ряда по 3)
const visibleCount = ref(6);

// Видимые подкасты
const visiblePodcasts = computed(() => {
  return allPodcasts.value.slice(0, visibleCount.value);
});

// Есть ли ещё подкасты для показа
const hasMorePodcasts = computed(() => {
  return visibleCount.value < allPodcasts.value.length;
});

// Загрузка дополнительных подкастов
const loadMorePodcasts = () => {
  loadingMore.value = true;

  setTimeout(() => {
    visibleCount.value = allPodcasts.value.length;
    loadingMore.value = false;

    $q.notify({
      message: 'Все подкасты загружены',
      color: 'positive',
      position: 'bottom',
      timeout: 2000,
    });
  }, 500);
};

// Функция для получения подкастов с API (с заглушкой)
const fetchPodcasts = async () => {
  loadingPodcasts.value = true;

  $q.loading.show({
    message: 'Загрузка подкастов...',
    boxClass: 'bg-primary text-white',
  });

  try {
    // Реальный запрос к API
    const response = await api.get('/podcasts');
    allPodcasts.value = response.data.data;
    console.log('Подкасты загружены:', allPodcasts.value);

  } catch (error) {
    console.error('Ошибка при загрузке подкастов:', error);
    $q.notify({
      message: 'Не удалось загрузить подкасты',
      color: 'negative',
      position: 'top',
      icon: 'error',
    });
  } finally {
    loadingPodcasts.value = false;
    $q.loading.hide();
  }
};

// Функция для преобразования ссылки VK Video в embed-код
const getEmbedCodeFromUrl = (url: string): string => {
  const match = url.match(/video-?(\d+)_(\d+)/);
  if (match) {
    const ownerId = match[1];
    const videoId = match[2];
    const finalOwnerId = url.includes('video-') ? `-${ownerId}` : ownerId;
    return `<iframe
      src="https://vkvideo.ru/video_ext.php?oid=${finalOwnerId}&id=${videoId}&hd=1&autoplay=1"
      width="100%"
      height="100%"
      allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock"
      frameborder="0"
      allowfullscreen
    ></iframe>`;
  }
  console.warn('Не удалось распознать ссылку на видео:', url);
  return '';
};

const currentEmbedCode = ref('');

const playPodcast = (podcast: Podcast) => {
  if (podcast.vk_url) {
    currentEmbedCode.value = getEmbedCodeFromUrl(podcast.vk_url);
    videoDialogVisible.value = true;
  } else {
    $q.notify({
      message: 'Ссылка на видео отсутствует',
      color: 'warning',
      position: 'top',
      timeout: 2000,
    });
  }
};

const closeVideoDialog = () => {
  videoDialogVisible.value = false;
  currentEmbedCode.value = '';
};

// Загружаем подкасты при монтировании компонента
onMounted(() => {
  void fetchPodcasts();
  void fetchActivities();
});
</script>

<style scoped lang="scss">
// Hero секция на всю ширину
.hero-section {
  position: relative;
  width: 100%;
  min-height: 1016px;
  overflow: hidden;
}

.hero-bg {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 50%;

  :deep(.q-img__image) {
    object-fit: cover;
    object-position: center bottom;
  }
}

.hero-overlay {
  background: rgba(0, 0, 0, 0.3);
}

.hero-content {
  max-width: 1600px;
  margin: 0 auto;
  width: 100%;
}

.hero-center-img {
  width: 100%;
  max-width: 1600px;
  height: auto;
  margin: 0 auto;

  :deep(.q-img__image) {
    object-fit: contain;
  }
}

.hero-topic-wrapper {
  text-align: center;
  margin: 40px 40px;
}

.hero-topic {
  color: #505468;
  font-family: 'Mulish', sans-serif;
  font-size: 90px;
  font-weight: 700;
  line-height: 1.2;
  max-width: 1100px;
  margin-bottom: 16px;
  display: inline-flex;
}

.hero-text {
  color: #505468;
  font-family: 'Mulish', sans-serif;
  font-size: 32px;
  font-weight: 400;
  max-width: 1100px;
  display: inline-flex;
  margin: 0 auto;
}

// Основной контент
.main-content-wrapper {
  margin: 0 auto;
  position: relative;
  // z-index: 3;
}

.main-card {
  top: 31px;
  background: #ffffff;
  box-shadow: 0px -31px 0px #fbc6ba !important;
  border-radius: 100px 100px 0px 0px;
}

.feature-card {
  transition: all 0.3s ease;
  background: rgba(255, 255, 255, 0.8);
  backdrop-filter: blur(4px);
  border-radius: 16px !important;

  &:hover {
    transform: translateY(-4px);
    background: white;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08) !important;
  }
}

.section-padding {
  padding: 64px 24px;
  max-width: 1200px;
  margin: 0 auto;
}

// Блок "Пространство" с фоновой картинкой
.space-section {
  position: relative;
  width: 100%;
  overflow: hidden;
}

.space-bg {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  // box-shadow: 0px -20px 0px 0px #fbc6ba;
  opacity: 0.5; // прозрачность фона, можно убрать или изменить
  pointer-events: none;
}

.space-content-wrapper {
  position: relative;
  z-index: 2;
  max-width: 1600px;
  margin: 0 auto;
  padding-top: 100px;
}

.space-content {
  display: flex;
  align-items: center;
  gap: 24px;
}

.space-image {
  flex: 1;
  max-width: 400px;
}

.space-img {
  width: 100%;
  height: auto;
}

.space-text {
  flex: 2;
  text-align: left;
}

.space-title {
  font-family: 'Mulish', sans-serif;
  font-size: 80px;
  font-weight: 700;
  color: #505468;
  line-height: 96px;
  margin-bottom: 24px;
}

.space-description {
  font-family: 'Mulish', sans-serif;
  font-size: 32px;
  font-weight: 400;
  color: #505468;
  line-height: 44px;
}
// Блок с преимуществами
.advantages-section {
  padding: 60px 0 40px;
}

.advantage-card {
  text-align: left;
  width: 100%;
}

.advantage-image {
  margin-bottom: 32px;
}

.advantage-img {
  max-width: 485px;
  height: auto;
}

.advantage-description {
  font-family: 'Mulish', sans-serif;
  font-size: 32px;
  font-weight: 400;
  color: #505468;
  line-height: 44px;
  max-width: 720px;
}

.advantage-image-small {
  width: 100%;

  .advantage-img-small {
    width: 100%;
    height: auto;
  }
}

.advantages-second-col {
  // display: block !important;
  flex-direction: column !important;
}

.advantage-row {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 40px;
  margin-top: 40px;
}

.advantage-icon-left,
.advantage-icon-right {
  flex-shrink: 0;
}

.advantage-icon {
  width: 24px;
  height: 133px;
}

.advantage-text {
  flex: 1;
}

.advantage-description {
  font-family: 'Mulish', sans-serif;
  font-size: 24px;
  font-weight: 400;
  color: #505468;
  line-height: 36px;
  margin: 0;
}

.advantage-tab {
  display: none;
}

// Секция "Виды деятельности"
.activities-section {
  padding: 80px 24px;
  max-width: 1600px;
  margin: 0 auto;
}

.activities-title {
  font-family: 'Mulish', sans-serif;
  font-size: 80px;
  font-weight: 700;
  color: #505468;
  text-align: center;
  margin-bottom: 60px;
}

.activities-slider {
  display: flex;
  justify-content: center;
  margin: 0px auto 60px;
}

.activities-oval {
  display: flex;
  align-items: center;
  background: #fff9f6;
  border-radius: 100px;
  padding: 4px;
}

.activity-switch {
  display: flex;
  align-items: center;
  gap: 12px;
  padding: 5px 28px;
  border-radius: 60px;
  cursor: pointer;
  transition: all 0.3s ease;
  background: transparent;

  &.active {
    background: #fbe1ba;
  }
}

.activity-icon {
  width: 16px;
  height: 16px;
}

.activity-text {
  font-family: 'Mulish', sans-serif;
  font-size: 20px;
  font-weight: 400;
  color: #6f552e;
  white-space: nowrap;
}

.activities-content {
  padding: 40px 0;
}

.activity-content {
  font-family: 'Mulish', sans-serif;
  font-size: 18px;
  color: #505468;
  line-height: 1.5;
}
// Карточки для учебной деятельности
.cards-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 24px;
}

.activity-card {
  background: #ffffff;
  border-radius: 40px;
  padding: 24px;
  transition: transform 0.3s ease;
}
.card-1 {
  box-shadow:
    0px -20px 0px 0px #ddbbfb,
    0px 0px 14px 0px rgba(80, 84, 104, 0.12);
}

// Голубая тень
.card-2 {
  box-shadow:
    0px -20px 0px 0px #dce0f4,
    0px 0px 14px 0px rgba(80, 84, 104, 0.12);
}

// Зелёная тень
.card-3 {
  box-shadow:
    0px -20px 0px 0px #fbc6ba,
    0px 0px 14px 0px rgba(80, 84, 104, 0.12);
}

.card-header {
  display: flex;
  align-items: center;
  gap: 12px;
  margin-bottom: 20px;
}

.card-icon {
  width: 40px;
  height: 40px;
  flex-shrink: 0;
}

.card-title {
  font-family: 'Mulish', sans-serif;
  font-size: 20px;
  font-weight: 700;
  color: #505468;
  line-height: 1.3;
}

.card-text {
  font-family: 'Mulish', sans-serif;
  font-size: 14px;
  font-weight: 400;
  color: #6f6f7a;
  line-height: 1.5;
  margin-bottom: 24px;
}

.card-files {
  border-top: 1px solid #e8e8e8;
  padding-top: 16px;
}

.files-info {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 16px;
}

.files-count {
  font-family: 'Mulish', sans-serif;
  font-size: 14px;
  font-weight: 500;
  color: #505468;
}

.docs-link {
  display: flex;
  align-items: center;
  gap: 8px;
  cursor: pointer;

  span {
    font-family: 'Mulish', sans-serif;
    font-size: 14px;
    font-weight: 500;
    color: #505468;
  }
}

.docs-icon {
  width: 18px;
  height: 18px;
}

.files-list {
  display: flex;
  flex-direction: column;
  gap: 12px;
}

.file-item {
  display: flex;
  align-items: center;
  justify-content: space-between;
  cursor: pointer;
  border-radius: 16px;
  background-color: #f9fafb;
  padding: 12px;
  gap: 12px;

  &:hover span {
    color: #f5a623;
  }
}

.file-info {
  display: flex;
  align-items: center;
  gap: 12px;
  flex: 1;
}

.file-details {
  display: flex;
  flex-direction: column;
  gap: 4px;
}

.file-icon {
  width: 40px;
  height: 40px;
}

.file-name {
  font-family: 'Mulish', sans-serif;
  font-size: 14px;
  font-weight: 500;
  color: #131314;
  text-decoration: none;
  transition: color 0.2s ease;
  max-width: 250px;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  display: block;
}

.file-size {
  font-family: 'Mulish', sans-serif;
  font-size: 12px;
  font-weight: 400;
  color: #505468;
}

.download-icon {
  width: 16px;
  height: 16px;
  flex-shrink: 0;
  cursor: pointer;
}
.show-more-files {
  margin-top: 12px;
  text-align: center;
}

.show-more-files-btn {
  font-family: 'Mulish', sans-serif;
  font-size: 14px;
  font-weight: 500;
  color: #505468;
  padding: 0;
  min-height: auto;

  &:hover {
    background: transparent;
    color: #505468;
  }
}
body.desktop .q-focusable:focus > .q-focus-helper,
body.desktop .q-manual-focusable--focused > .q-focus-helper,
body.desktop .q-hoverable:hover > .q-focus-helper {
  background: none;
}

.btn-arrow-img {
  width: 20px;
  height: 20px;
  margin-left: 10px;
}

// Секция "Подкасты"
.podcasts-section {
  padding: 80px 24px 100px;
  margin: 0 auto;
  border-radius: 100px;
  background-color: #eef2fd;
}

.podcasts-container {
  max-width: 1600px;
  margin: 0 auto;
}

.podcasts-title {
  font-family: 'Mulish', sans-serif;
  font-size: 80px;
  font-weight: 700;
  color: #505468;
  text-align: center;
  margin-bottom: 24px;
}

.podcasts-description {
  font-family: 'Mulish', sans-serif;
  font-size: 24px;
  font-weight: 400;
  color: #4b5563;
  text-align: center;
  max-width: 800px;
  margin: 0 auto 60px;
  line-height: 1.5;
}

.podcasts-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 24px;
  margin-bottom: 40px;
}

.podcast-card {
  cursor: pointer;
  transition: transform 0.3s ease;

  &:hover {
    transform: translateY(-8px);
  }
}

.podcast-image {
  position: relative;
  border-radius: 24px;
  overflow: hidden;
  margin-bottom: 16px;
  aspect-ratio: 16 / 9;
  cursor: pointer;

  &:hover .play-button {
    opacity: 1;
    transform: translate(-50%, -50%) scale(1.1);
  }
}

.podcast-img {
  width: 100%;
  height: 100%;
  transition: transform 0.3s ease;

  :deep(.q-img__image) {
    object-fit: cover;
  }
}

.podcast-image:hover .podcast-img {
  transform: scale(1.05);
}

.play-button {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 60px;
  height: 60px;
  backdrop-filter: blur(4px);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition: all 0.3s ease;
  opacity: 0.9;

  &:hover {
    transform: translate(-50%, -50%) scale(1.1);
  }
}

.play-icon {
  width: 60px;
  height: 60px;
}

.podcast-title {
  font-family: 'Mulish', sans-serif;
  font-size: 32px;
  font-weight: 700;
  color: #4b5563;
}

.show-more-wrapper {
  display: flex;
  justify-content: center;
  margin-top: 64px;
}

.show-more-btn {
  background: #fbe1ba;
  color: #6f552e;
  font-family: 'Mulish', sans-serif;
  font-size: 24px;
  font-weight: 400;
  padding: 12px 40px;
  border-radius: 40px;
  transition: all 0.3s ease;

  &:hover {
    background: #e8e8e8;
    transform: translateY(-2px);
  }
}

.btn-content {
  display: inline-flex;
  align-items: center;
  gap: 8px;
}

.btn-icon {
  width: 24px;
  height: 24px;

  transition: transform 0.3s ease;
}

.show-more-btn:hover .btn-icon {
  transform: translateX(4px);
}

// Модальное окно для видео
.video-dialog {
  :deep(.q-dialog__backdrop) {
    background: #06091f0d !important;
    backdrop-filter: blur(20px) !important;
  }
}

.video-modal {
  position: relative;
  width: 90vw;
  max-width: 1200px;
  background-image: url('~assets/video.svg');
  background-size: cover;
  background-position: center;
  border-radius: 50px;
  overflow: hidden;

  &::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.3);
    z-index: 0;
  }
}

.video-modal-wrapper {
  max-width: 90vw !important;
  max-height: 90vh !important;
}

.video-modal-close {
  position: absolute;
  top: 40px;
  right: 40px;
  width: 40px;
  height: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  z-index: 10;
  transition: all 0.3s ease;
  color: #6f552e;

  &:hover {
    background: rgba(0, 0, 0, 0.7);
    transform: scale(1.05);
  }
}

.video-container {
  position: relative;
  z-index: 1;
  width: 100%;
  height: 100%;
  aspect-ratio: 16 / 9;

  :deep(iframe) {
    width: 100%;
    height: 100%;
    // border-radius: 40px;
    border: none;
  }
}

.video-iframe {
  width: 100%;
  height: 100%;
  border-radius: 40px;
  border: none;
}

// Адаптив для мобильных
@media (max-width: 768px) {
  .video-modal {
    border-radius: 28px;
  }

  .video-iframe {
    border-radius: 28px;
  }

  .video-modal-close {
    top: 8px;
    right: 8px;
    width: 32px;
    height: 32px;

    .q-icon {
      font-size: 18px;
    }
  }
}

// Адаптив для планшетов
@media (max-width: 1024px) {
  .file-name {
    max-width: 500px;
  }
  .podcasts-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
  }

  .podcasts-title {
    font-size: 60px;
  }
}

// Адаптив для мобильных
@media (max-width: 768px) {
  .row.q-col-gutter-lg[data-v-2373a833] {
    gap: 10px;
  }
  .podcasts-section {
    padding: 60px 40px 60px;
    border-radius: 60px;
  }

  .podcasts-grid {
    grid-template-columns: repeat(1, 1fr);
    gap: 20px;
  }

  .podcasts-title {
    font-size: 48px;
  }

  .podcast-title {
    font-size: 22px;
  }
  .podcasts-description {
    font-size: 16px;
    margin-bottom: 40px;
  }
  .show-more-btn {
    padding: 10px 30px;
    font-size: 14px;
  }
  .btn-icon {
    width: 20px;
    height: 20px;
  }
}

@media (max-width: 480px) {
  .file-name {
    max-width: 200px;
  }
  .podcasts-section {
    padding: 40px 20px 40px;
  }
  .podcasts-title {
    font-size: 36px;
  }

  .show-more-btn {
    padding: 10px 30px;
    font-size: 14px;
  }
}

// Адаптив для планшетов
@media (max-width: 1024px) {
  .cards-grid {
    grid-template-columns: 1fr;
    gap: 40px;
  }
  .activities-slider {
    display: block;
    width: 100%;
    overflow-x: auto;
    overflow-y: hidden;
    -webkit-overflow-scrolling: touch; // Плавный скролл на iOS
    margin: 0px auto 20px;
    // scrollbar-width: thin; // Тонкий скроллбар для Firefox

    // Скрываем скроллбар для Chrome/Safari (опционально)
    &::-webkit-scrollbar {
      height: 0px;
    }

    &::-webkit-scrollbar-track {
      background: #f0f0f0;
      border-radius: 4px;
    }

    &::-webkit-scrollbar-thumb {
      background: #fbe1ba;
      border-radius: 4px;
    }
  }

  // Адаптив для мобильных
  @media (max-width: 768px) {
    .cards-grid {
      grid-template-columns: 1fr;
    }

    .activity-card {
      padding: 20px;
    }

    .card-title {
      font-size: 18px;
    }
  }
  // Адаптив для планшетов
  @media (max-width: 768px) {
    .activities-section {
      padding: 20px 24px;
    }

    .activities-title {
      font-size: 40px;
      margin-bottom: 40px;
    }

    // Изменяем овал на горизонтальный скролл

    .activities-oval {
      display: flex;
      flex-direction: row; // Оставляем горизонтальное расположение
      align-items: center;
      background: #fff9f6;
      border-radius: 100px;
      padding: 4px;
      width: max-content; // Ширина по содержимому
      //min-width: 100%; // Минимальная ширина на всю ширину контейнера
      gap: 8px;
    }

    .activity-switch {
      width: auto; // Убираем width: 100%
      justify-content: center;
      white-space: nowrap; // Запрещаем перенос текста
      flex-shrink: 0; // Запрещаем сжатие элементов
    }

    .activity-text {
      font-size: 16px;
      white-space: nowrap; // Текст в одну строку
    }
  }
}

// Адаптив для мобильных
@media (max-width: 480px) {
  .activities-title {
    font-size: 36px;
  }

  .activity-text {
    font-size: 16px;
  }

  .activity-icon {
    width: 24px;
    height: 24px;
  }
}

@media (max-width: 1024px) {
  #row-block {
    display: none;
  }
  .advantages-second-col {
    display: none;
  }
  .advantage-tab {
    display: flex;
    justify-content: space-between;
    gap: 10px;
    width: 100%;
  }
  .advantage-tab-col-1 {
    width: 58%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }
  .advantage-tab-col-2 {
    width: 40%;
  }
  .advantage-row {
    margin-top: 0px;
    margin-bottom: 20px;
  }
}
// Адаптив для планшетов
@media (max-width: 768px) {
  .advantages-section {
    padding: 20px 0;
  }

  // Перестраиваем строку преимуществ
  .row.q-col-gutter-lg {
    display: flex;
    flex-direction: column;
    gap: 40px;
  }

  // Первая колонка (с текстом и иконками)
  .col-12.col-md-6:first-child {
    //order: 1; // Первая колонка сверху
  }

  // Вторая колонка (с двумя картинками)
  .col-12.col-md-6:last-child {
    //order: 2; // Вторая колонка снизу
    display: flex;
    flex-direction: row;
    gap: 20px;

    .row.q-col-gutter-md {
      display: flex;
      flex-direction: row;
      width: 100%;
      gap: 20px;

      .col-6 {
        flex: 1;
        width: 50%;
      }
    }
  }

  .advantage-description {
    font-size: 22px;
    line-height: 28px;
  }

  .advantage-row {
    gap: 16px;
    text-align: left;
  }
}

// Адаптив для мобильных
@media (max-width: 480px) {
  .advantage-row {
    text-align: center;
    gap: 20px;
    margin-bottom: 0px;
  }

  .advantage-icon-left,
  .advantage-icon-right {
    width: 24px;
    height: 80px;
  }
  .advantage-icon {
    width: 24px;
    height: 80px;
  }
}
// Адаптив для планшетов
@media (max-width: 768px) {
  .advantage-title {
    font-size: 32px;
    line-height: 40px;
  }

  .advantage-image {
    margin-bottom: 24px;
  }
  .col-12.col-md-6:last-child .row.q-col-gutter-md {
    flex-direction: column !important; // меняем с row на column
  }
}

// Адаптив для мобильных
@media (max-width: 480px) {
  .advantage-title {
    font-size: 28px;
    line-height: 36px;
  }

  .advantage-image {
    display: none;
  }

  .advantage-card {
    text-align: center;
  }

  .advantage-description {
    max-width: 100%;
    text-align: left;
    font-size: 16px;
    line-height: 20px;
  }

  .advantage-image-small {
    width: 350px;
    height: auto;
  }
}

// Адаптив для планшетов
@media (max-width: 768px) {
  .space-description {
    font-size: 22px;
    line-height: 28px;
    max-width: 100%;
  }

  .space-title {
    font-size: 32px;
  }

  .space-content-wrapper {
    padding: 60px 24px;
  }
}

// Адаптив для мобильных
@media (max-width: 480px) {
  .space-title {
    font-size: 28px;
  }

  .space-description {
    font-size: 16px;
    line-height: 20px;
  }

  .space-image {
    min-width: 250px;
  }
  .space-content {
    display: block;
  }
  .space-title[data-v-2373a833] {
    padding-top: 20px;
    font-size: 32px;
    line-height: 35px;
  }
}

// Адаптив для мобильных
@media (max-width: 1024px) {
  .hero-topic {
    font-size: 60px;
  }

  .hero-text {
    font-size: 24px;
  }

  .hero-section {
    min-height: 800px;
  }

  .space-title {
    font-size: 40px;
    line-height: 44px;
  }
}

@media (max-width: 768px) {
  .hero-section {
    min-height: 600px;
  }

  .hero-topic {
    font-size: 36px;
  }

  .hero-text {
    font-size: 18px;
    width: 80%;
  }

  .main-content-wrapper {
    margin-top: -20px;
  }
}

@media (max-width: 599px) {
  .hero-section {
    min-height: 500px;
  }

  .hero-topic-wrapper {
    margin: 40px 20px;
  }

  .hero-topic {
    font-size: 28px;
  }

  .hero-text {
    font-size: 16px;
  }
  .advantage-tab {
    display: none;
  }
  #row-block {
    display: flex;
  }
  .advantages-second-col {
    display: block;
  }
  .row > .col-6,
  .row > .col-xs-6 {
    height: auto;
    width: 100%;
  }
  .row.q-col-gutter-lg[data-v-2373a833] {
    display: flex;
    flex-direction: column;
    gap: 20px;
  }
  .q-col-gutter-y-md > *,
  .q-col-gutter-md > * {
    padding-top: 20px;
  }
}
</style>
