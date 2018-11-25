//
//  PhotoViewController.m
//  TheParty
//
//  Created by macmini on 2018/7/31.
//  Copyright © 2018年 macmini. All rights reserved.
//

#import "PhotoViewController.h"
#import "PhototListTableViewCell.h"
#import "PhotoDetailViewController.h"


@interface PhotoViewController ()<UITableViewDelegate,UITableViewDataSource>
{
    UITableView *tableView;
    NSMutableArray *dataArr;
    NSInteger page;
}

@end

@implementation PhotoViewController

- (void)viewDidLoad {
    [super viewDidLoad];
    // Do any additional setup after loading the view.
    self.title = @"党建相册";
    page = 1;
    dataArr = [[NSMutableArray alloc] init];
    [self ctreatTableView];
    [self createData];
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
    NSString *biz=[NSString stringWithFormat:@"&p=%zd&pageSize=10",page];
    [ConnectionRequestMgr GetSessionWithUrl:PhotoList parameter:biz successBlock:^(NSDictionary *dict) {
        [weakSelf cancelStatus];
        [weakSelf hideHUD];
        if ([dict[@"code"] integerValue] == 1) {
            for (int i = 0; i< [dict[@"data"] count]; i++) {
                [dataArr addObject:dict[@"data"][i]];
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
    tableView = [[UITableView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W , SCREEN_H - 68) style:UITableViewStyleGrouped];
    tableView.delegate = self;
    tableView.separatorStyle = NO;
    tableView.dataSource = self;
    [self.view addSubview:tableView];
    [tableView registerNib:[UINib nibWithNibName:@"PhototListTableViewCell" bundle:nil] forCellReuseIdentifier:@"PhototListTableViewCell"];
    
    tableView.estimatedRowHeight = 0;
    tableView.estimatedSectionHeaderHeight = 0;
    tableView.estimatedSectionFooterHeight = 0;
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
    PhototListTableViewCell *cell = [tableView dequeueReusableCellWithIdentifier:@"PhototListTableViewCell"];
    cell.selectionStyle = UITableViewCellSelectionStyleNone;
    cell.titleL.text = dataArr[indexPath.section][@"name"];
    cell.deline.text = dataArr[indexPath.section][@"ctime"];
    cell.imageVup.hidden = YES;
    if ([dataArr[indexPath.section][@"path"] count] == 1) {
        [cell.imageVleft sd_setImageWithURL:[NSURL URLWithString:dataArr[indexPath.section][@"path"][0]] placeholderImage:[UIImage imageNamed:@"photoLoading"]];
        [cell.imageVRightT sd_setImageWithURL:nil];
        [cell.imageVRightD sd_setImageWithURL:nil];
    }else if([dataArr[indexPath.section][@"path"] count] == 2){
         [cell.imageVleft sd_setImageWithURL:[NSURL URLWithString:dataArr[indexPath.section][@"path"][0]] placeholderImage:[UIImage imageNamed:@"photoLoading"]];
         [cell.imageVRightT sd_setImageWithURL:[NSURL URLWithString:dataArr[indexPath.section][@"path"][1]] placeholderImage:[UIImage imageNamed:@"photoLoading"]];
          [cell.imageVRightD sd_setImageWithURL:nil];
    }else if([dataArr[indexPath.section][@"path"] count] > 2){
         [cell.imageVleft sd_setImageWithURL:[NSURL URLWithString:dataArr[indexPath.section][@"path"][0]] placeholderImage:[UIImage imageNamed:@"photoLoading"]];
         [cell.imageVRightT sd_setImageWithURL:[NSURL URLWithString:dataArr[indexPath.section][@"path"][1]] placeholderImage:[UIImage imageNamed:@"photoLoading"]];
         [cell.imageVRightD sd_setImageWithURL:[NSURL URLWithString:dataArr[indexPath.section][@"path"][2]] placeholderImage:[UIImage imageNamed:@"photoLoading"]];
        cell.imageVup.hidden = NO;
    }else{
        [cell.imageVRightT sd_setImageWithURL:nil];
        [cell.imageVRightD sd_setImageWithURL:nil];
        [cell.imageVleft sd_setImageWithURL:nil];
    }
    return cell;
    
}

- (CGFloat)tableView:(UITableView *)tableView heightForRowAtIndexPath:(NSIndexPath *)indexPath{
    return 210;
}

- (CGFloat)tableView:(UITableView *)tableView heightForFooterInSection:(NSInteger)section{
    return 0.01;
}

- (CGFloat)tableView:(UITableView *)tableView heightForHeaderInSection:(NSInteger)section{
    return 0.01;
}

- (UIView *)tableView:(UITableView *)tableView viewForHeaderInSection:(NSInteger)section{
    UIView *view = [[UIView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, 0.01)];
    return view;
}

- (UIView *)tableView:(UITableView *)tableView viewForFooterInSection:(NSInteger)section{
    UIView *view = [[UIView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, 0.1)];
    return view;
}

- (void)tableView:(UITableView *)tableView didSelectRowAtIndexPath:(NSIndexPath *)indexPath{
    [[UIHelper sharedSingleton] pushVC:@"PhotoDetailViewController" vc:self parames:@{@"photoId":dataArr[indexPath.section][@"id"]}];
}

- (void)cancelStatus
{
    if ([tableView.mj_header isRefreshing]) {
        [tableView.mj_header endRefreshing];
    }else if ([tableView.mj_footer isRefreshing]) {
        [tableView.mj_footer endRefreshing];
    }
}

- (void)didReceiveMemoryWarning {
    [super didReceiveMemoryWarning];
    // Dispose of any resources that can be recreated.
}

/*
#pragma mark - Navigation

// In a storyboard-based application, you will often want to do a little preparation before navigation
- (void)prepareForSegue:(UIStoryboardSegue *)segue sender:(id)sender {
    // Get the new view controller using [segue destinationViewController].
    // Pass the selected object to the new view controller.
}
*/

@end
