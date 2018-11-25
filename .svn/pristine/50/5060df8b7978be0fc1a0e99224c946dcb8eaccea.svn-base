//
//  AntiRootViewController.m
//  TheParty
//
//  Created by macmini on 2018/8/2.
//  Copyright © 2018年 macmini. All rights reserved.
//

#import "AntiRootViewController.h"
#import "AntiTableViewCell.h"
@interface AntiRootViewController ()<UITableViewDelegate,UITableViewDataSource>
{
    UITableView *tableView;
    NSMutableArray *dataArr;
    NSInteger page;
    NSString *NewsID;
}

@end

@implementation AntiRootViewController

- (void)viewWillAppear:(BOOL)animated {
    [[NSNotificationCenter defaultCenter] addObserver:self selector:@selector(createFormData:) name:@"NewsWebData" object:nil];
    [super viewWillAppear:animated];
}

- (void)viewWillDisappear:(BOOL)animated {

    [super viewWillDisappear:animated];
}

-(void)dealloc
{
    NSLog(@"RootViewController dealloc--");
}

- (void)viewDidLoad {
    [super viewDidLoad];
    NewsID = @"";
    dataArr = [[NSMutableArray alloc] init];
    self.view.backgroundColor =COLOR(249, 245, 245);
    self.edgesForExtendedLayout = UIRectEdgeNone;
    [self ctreatTableView];
    
}

///加载数据
-(void)rootLoadData:(NSInteger)index andArr:(NSDictionary *)dic
{
    [dataArr removeAllObjects];
    NewsID = [NSString stringWithFormat:@"%@",dic[@"id"]];
    page = 1;
    [self createData];
}

- (void)createFormData:(NSNotification *)dic{
    if ([dic.userInfo[@"type"]  isEqualToString: NewsID]) {
        [dataArr removeAllObjects];
        page = 1;
        [self createData];
    }
}

- (void)refresh {
    page = 1;
    [dataArr removeAllObjects];
    [self createData];
    
}

- (void)loadMore {
    page++;
    [self createData];
}

- (void)createData{
    [self showHUD:nil];
    WEAKSELF
    NSString *biz=[NSString stringWithFormat:@"&cate_id=%@&p=%zd&pageSize=10",NewsID,page];
    [ConnectionRequestMgr GetSessionWithUrl:ClearNewList parameter:biz successBlock:^(NSDictionary *dict) {
        [weakSelf cancelStatus];
        [weakSelf hideHUD];
        if ([dict[@"code"] integerValue] == 1) {
            for (int i = 0; i< [dict[@"data"] count]; i++) {
                [dataArr addObject:dict[@"data"][i]];
            }
            if (dataArr.count == 0) {
                [weakSelf viewthephoto:@"NoList" andtitle:@"暂无内容"];
            }else{
                [weakSelf removeView];
            }
            [tableView reloadData];
        }else{
            [weakSelf showError:dict[@"msg"]];
        }
    } failBlock:^(NSString *errorStr) {
        [weakSelf cancelStatus];
        [weakSelf hideHUD];
        [weakSelf showError:errorStr];
    }];
    
}


- (void)ctreatTableView{
    tableView = [[UITableView alloc] initWithFrame:CGRectMake(16, 0, SCREEN_W -32, SCREEN_H -48-44) style:UITableViewStyleGrouped];
    tableView.backgroundColor = COLOR(249, 245, 245);
    tableView.delegate = self;
    tableView.separatorStyle = NO;
    tableView.dataSource = self;
    tableView.showsVerticalScrollIndicator = FALSE;
    tableView.showsHorizontalScrollIndicator = FALSE;
    [self.view addSubview:tableView];

    tableView.estimatedRowHeight = 0;
    tableView.estimatedSectionHeaderHeight = 0;
    tableView.estimatedSectionFooterHeight = 0;

    [tableView registerNib:[UINib nibWithNibName:@"AntiTableViewCell" bundle:nil] forCellReuseIdentifier:@"AntiTableViewCell"];
    tableView.mj_header = [FunClubGifHeader headerWithRefreshingTarget:self refreshingAction:@selector(refresh)];
    tableView.mj_footer = [MJRefreshAutoFooter footerWithRefreshingTarget:self refreshingAction:@selector(loadMore)];
    
}


#pragma mark UItableViewDelegate
- (NSInteger)tableView:(UITableView *)tableView numberOfRowsInSection:(NSInteger)section{
    return 1;
}

- (NSInteger)numberOfSectionsInTableView:(UITableView *)tableView{
    return dataArr.count;
}

- (UITableViewCell *)tableView:(UITableView *)tableView cellForRowAtIndexPath:(NSIndexPath *)indexPath{
    AntiTableViewCell *cell = [tableView dequeueReusableCellWithIdentifier:@"AntiTableViewCell"];
    cell.selectionStyle = UITableViewCellSelectionStyleNone;
    [cell.imageV sd_setImageWithURL:[NSURL URLWithString:dataArr[indexPath.section][@"thumb"]] placeholderImage:[UIImage imageNamed:@"photoLoading"]];
    cell.titleL.text = dataArr[indexPath.section][@"title"];
    cell.typeL.text = dataArr[indexPath.section][@"name"];
    cell.deline.text = dataArr[indexPath.section][@"ctime"];
    return cell;
}

- (CGFloat)tableView:(UITableView *)tableView heightForRowAtIndexPath:(NSIndexPath *)indexPath{
    return 90;
}

- (CGFloat)tableView:(UITableView *)tableView heightForFooterInSection:(NSInteger)section{
    return 0.01;
}

- (CGFloat)tableView:(UITableView *)tableView heightForHeaderInSection:(NSInteger)section{
    return 4;
}

- (UIView *)tableView:(UITableView *)tableView viewForHeaderInSection:(NSInteger)section{
    UIView *view = [[UIView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, 4)];
    view.backgroundColor = COLOR(249, 245, 245);
    return view;
}

- (UIView *)tableView:(UITableView *)tableView viewForFooterInSection:(NSInteger)section{
    UIView *view = [[UIView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, 0.1)];
    return view;
}

- (void)tableView:(UITableView *)tableView didSelectRowAtIndexPath:(NSIndexPath *)indexPath{
    [[UIHelper sharedSingleton] pushVC:@"NewsWebViewController" vc:self parames:@{@"str":dataArr[indexPath.section][@"url"],@"Titlestr":dataArr[indexPath.section][@"title"],@"Islike":dataArr[indexPath.section][@"is_praise"],@"ID":dataArr[indexPath.section][@"id"],@"type":NewsID}];
}

- (void)cancelStatus
{
    if ([tableView.mj_header isRefreshing]) {
        [tableView.mj_header endRefreshing];
    }else if ([tableView.mj_footer isRefreshing]) {
        [tableView.mj_footer endRefreshing];
    }
}



@end
