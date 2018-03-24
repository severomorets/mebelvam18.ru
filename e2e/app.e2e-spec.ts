import { Mebelvam18.RuPage } from './app.po';

describe('mebelvam18.ru App', () => {
  let page: Mebelvam18.RuPage;

  beforeEach(() => {
    page = new Mebelvam18.RuPage();
  });

  it('should display message saying app works', () => {
    page.navigateTo();
    expect(page.getParagraphText()).toEqual('app works!');
  });
});
