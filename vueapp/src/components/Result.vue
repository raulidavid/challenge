<template>
  <div>
    <v-data-table
      :headers="headers"
      :items="desserts"
      :items-per-page="5"
      class="elevation-1"
    ></v-data-table>
  </div>
</template>

<script>
export default {
  data: () => ({ 
      items: [
        {
          title: 'card 1',
          content: 'this is the content of card 1'
        },
        {
          title: 'card 2',
          content: 'this is the content of card 2'
        }
      ],
      headers: [
        { text: 'Ticket', value: 'ticket' },
        {
          text: 'Precio',
          align: 'start',
          sortable: false,
          value: 'name',
        },
        { text: 'Aerolínea', value: 'aerolinea' },
        { text: 'Número de Escalas', value: 'fat' },
        { text: 'Duración del Vuelo', value: 'carbs' },
      ],
      desserts: [
        {
          name: '180.00',
          aerolinea: 'Avianca',
          fat: 6.0,
          carbs: 24,
          ticket: 12345,
          iron: '1%',
        },
        {
          name: '250.00',
          aerolinea: 'Tame',
          fat: 9.0,
          carbs: 37,
          ticket: 22222,
          iron: '1%',
        },
        {
          name: '120.00',
          aerolinea: 'Aerogal',
          fat: 16.0,
          carbs: 23,
          ticket: 33333,
          iron: '7%',
        },
        {
          name: '110.00',
          aerolinea: 'Tame',
          fat: 3.7,
          carbs: 67,
          ticket: 33333,
          iron: '8%',
        },
        {
          name: '85.00',
          aerolinea: 'AeroMadrid',
          fat: 16.0,
          carbs: 49,
          ticket: 44444,
          iron: '16%',
        },
        {
          name: 'Jelly bean',
          aerolinea: 'Aerogal',
          fat: 0.0,
          carbs: 94,
          ticket: 55555,
          iron: '0%',
        },
      ],
  }),
}
</script>

