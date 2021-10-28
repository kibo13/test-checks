$(document).ready(function () {
    const page = document.querySelector('.bk-page')

    if (page != null) {
      let table = document.querySelector('.bk-table')

      $(table).dataTable({
        language: {
          searchPlaceholder: 'Поиск',
          sProcessing: 'Подождите...',
          sLengthMenu: 'Показать _MENU_ записей',
          sZeroRecords: 'Записи отсутствуют.',
          sInfo: 'Записи с _START_ до _END_ из _TOTAL_ записей',
          sInfoEmpty: 'Записи с 0 до 0 из 0 записей',
          sInfoFiltered: '(отфильтровано из _MAX_ записей)',
          sInfoPostFix: '',
          sSearch: 'Поиск:',
          sUrl: '',
          oPaginate: {
            sFirst: 'Первая',
            sPrevious: '‹',
            sNext: '›',
            sLast: 'Последняя',
          },
          oAria: {
            sSortAscending:
              ': активировать для сортировки столбца по возрастанию',
            sSortDescending: ': активировать для сортировки столбцов по убыванию',
          },
        },
        ordering: true,
        columnDefs: [
          {
            orderable: false,
            targets: 'no-sort',
          },
        ],
        lengthMenu: [
          [8, -1],
          [
            'Показывать по 8',
            'Все записи',
          ],
        ],
      })
    }
  })
