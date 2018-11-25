//
//  Me_messageViewController.m
//  TheParty
//
//  Created by macmini on 2018/8/17.
//  Copyright © 2018年 macmini. All rights reserved.
//

#import "Me_messageViewController.h"
#import "Me_messageTableViewCell.h"
#import "MessageModel.h"
@interface Me_messageViewController ()<UITableViewDelegate,UITableViewDataSource>
{
    UITableView *tableView;
    NSMutableArray *dataArr;
    UIView *downView;
    UIButton *RightBtn;
}
@end

@implementation Me_messageViewController

-(void)dealloc
{
    NSLog(@"RootViewController dealloc--");
}

- (void)viewDidLoad {
    [super viewDidLoad];
    dataArr = [[NSMutableArray alloc] init];
    self.view.backgroundColor =COLOR(249, 245, 245);
    [self ctreatTableView];
    [self createData];
    [self creatRightNav];
}

- (void)creatRightNav{
    RightBtn = [UIButton buttonWithType:UIButtonTypeCustom];
    [RightBtn setFrame:CGRectMake(0, 0, 25, 25)];
    [RightBtn setImage:[UIImage imageNamed:@"message_b"] forState:UIControlStateNormal];
    [RightBtn addTarget:self action:@selector(RightAction:) forControlEvents:UIControlEventTouchUpInside];
    UIBarButtonItem *submitItem = [[UIBarButtonItem alloc] initWithCustomView:RightBtn];
    self.navigationItem.rightBarButtonItem = submitItem;
}

- (void)createData{
    [self showHUD:nil];
    WEAKSELF
    [ConnectionRequestMgr GetSessionWithUrl:UserMsg parameter:nil successBlock:^(NSDictionary *dict) {
        [weakSelf hideHUD];
        if ([dict[@"code"] integerValue] == 1) {
            [dataArr removeAllObjects];
            for (int i = 0; i< [dict[@"data"] count]; i++) {
                MessageModel *model = [[ MessageModel alloc] init];
                model = [MessageModel mj_objectWithKeyValues:dict[@"data"][i]];
                model.Is = NO;
                [dataArr addObject:model];
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
        [weakSelf hideHUD];
        [weakSelf showError:errorStr];
    }];
    
}

- (void)ctreatTableView{
    tableView = [[UITableView alloc] initWithFrame:CGRectMake(-52, 0, SCREEN_W +52, SCREEN_H -64) style:UITableViewStyleGrouped];
    tableView.delegate = self;
    tableView.separatorStyle = NO;
    tableView.dataSource = self;
    tableView.showsVerticalScrollIndicator = FALSE;
    tableView.showsHorizontalScrollIndicator = FALSE;
    tableView.backgroundColor =COLOR(249, 245, 245);
    tableView.contentOffset = CGPointMake(0, 0);
    [self.view addSubview:tableView];

    [tableView registerClass:[Me_messageTableViewCell class] forCellReuseIdentifier:@"Me_messageTableViewCell"];
    
    downView = [[UIView alloc] initWithFrame:CGRectMake(0, SCREEN_H - 49-64, SCREEN_W, 49)];
    if (kDevice_Is_iPhoneX) {
        downView.frame = CGRectMake(0, SCREEN_H - 50-86, SCREEN_W, 49);
    }else{
        downView.frame = CGRectMake(0, SCREEN_H - 49-64, SCREEN_W, 49);
    }
    downView.backgroundColor = [UIColor whiteColor];
    [self.view addSubview:downView];
    
    UIButton *allB = [UIButton buttonWithType:UIButtonTypeCustom];
    allB.frame = CGRectMake(10, 0, 49, 49);
    [allB setTitle:@"全选" forState:UIControlStateNormal];
    [allB setTitleColor:[UIColor redColor] forState:UIControlStateNormal];
    allB.titleLabel.font = Font(15);
    allB.selected = NO;
    [allB addTarget:self action:@selector(quanChoose:) forControlEvents:UIControlEventTouchUpInside];
    [downView addSubview:allB];
    
    UIButton *DeleB =[UIButton buttonWithType:UIButtonTypeCustom];
    DeleB.frame = CGRectMake(SCREEN_W - 123, 0, 123, 49);
    [DeleB setBackgroundColor:[UIColor redColor]];
    [DeleB setTitle:@"删除" forState:UIControlStateNormal];
    [DeleB setTitleColor:[UIColor whiteColor] forState:UIControlStateNormal];
    DeleB.titleLabel.font =  Font(15);
    [DeleB addTarget:self action:@selector(DeleteAction) forControlEvents:UIControlEventTouchUpInside];
    [downView addSubview:DeleB];
    
    downView.hidden =YES;
}

- (void)quanChoose:(UIButton *)sender{
    
    sender.selected = !sender.selected;
    
        for (int i = 0; i<dataArr.count; i++) {
            
            MessageModel *model = dataArr[i];
            model.Is = sender.selected;
        }
    
    
    [tableView reloadData];
    dispatch_async(dispatch_get_main_queue(), ^{
        tableView.contentOffset = CGPointMake(-52, 0);
    });
}

- (void)DeleteAction{
 
    NSMutableString *str = [[NSMutableString alloc ] init];
    for (int i = 0; i<dataArr.count; i++) {
        MessageModel *model = [[MessageModel alloc] init];
        model = [MessageModel mj_objectWithKeyValues:dataArr[i]];
        if (model.Is) {
            [str appendFormat:@"%@#",model.ID];
        }
        
    }
    [self showHUD:nil];
    WEAKSELF
    NSDictionary *biz = @{@"ids":str};
    [ConnectionRequestMgr POSTSessionWithUrl:DelMsg parameter:biz successBlock:^(NSDictionary *dict) {
        [weakSelf hideHUD];
        if ([dict[@"code"] integerValue] == 1) {
            [weakSelf showSuccess:@"删除成功！"];
            
            NSMutableArray *arr= [NSMutableArray new];
            arr = [dataArr mutableCopy];
            for (int i= 0; i<arr.count; i++) {
                MessageModel *model = arr[i];
                if (model.Is) {
                    [dataArr removeObject:model];
                }
            }
            downView.hidden = YES;
            [RightBtn setImage:[UIImage imageNamed:@"message_b"] forState:UIControlStateNormal];
            [RightBtn setTitle:@"" forState:UIControlStateNormal];
            RightBtn.selected = NO;
            [tableView reloadData];
        }else{
            [weakSelf showError:dict[@"message"]];
        }
    } failBlock:^(NSString *errorStr) {
        [weakSelf hideHUD];
        [weakSelf showError:errorStr];
    }];
    
}

- (void)RightAction:(UIButton *)sender{
    if (dataArr.count ==0) {
        return;
    }
    sender.selected = !sender.selected;
    if (sender.selected) {
        [sender setImage:[UIImage imageNamed:@""] forState:UIControlStateNormal];
        [sender setTitle:@"取消" forState:UIControlStateNormal];
        downView.hidden = NO;
        tableView.contentOffset = CGPointMake(-52, 0);
    }else{
        [sender setImage:[UIImage imageNamed:@"message_b"] forState:UIControlStateNormal];
        [sender setTitle:@"" forState:UIControlStateNormal];
        downView.hidden = YES;
        tableView.contentOffset = CGPointMake(0, 0);
    }
    
}

#pragma mark UItableViewDelegate
- (NSInteger)tableView:(UITableView *)tableView numberOfRowsInSection:(NSInteger)section{
    return 1;
}

- (NSInteger)numberOfSectionsInTableView:(UITableView *)tableView{
    return dataArr.count;
}

- (UITableViewCell *)tableView:(UITableView *)tableView cellForRowAtIndexPath:(NSIndexPath *)indexPath{
    Me_messageTableViewCell *cell = [tableView dequeueReusableCellWithIdentifier:@"Me_messageTableViewCell"];
    cell.selectionStyle = UITableViewCellSelectionStyleNone;
    
    [cell.ChooseB addTarget:self action:@selector(choose:) forControlEvents:UIControlEventTouchUpInside];
    cell.ChooseB.tag = indexPath.section;
    MessageModel *model = dataArr[indexPath.section];
    [cell SetModel:model];
    return cell;
}

- (CGFloat)tableView:(UITableView *)tableView heightForRowAtIndexPath:(NSIndexPath *)indexPath{
    MessageModel *model = dataArr[indexPath.section];
    CGRect rect = [model.message boundingRectWithSize:CGSizeMake(SCREEN_W - 26, 2000) options:NSStringDrawingUsesFontLeading|NSStringDrawingTruncatesLastVisibleLine|NSStringDrawingUsesLineFragmentOrigin attributes:@{NSFontAttributeName : [UIFont systemFontOfSize:12]} context:nil];
    return 55 +rect.size.height;
}

- (CGFloat)tableView:(UITableView *)tableView heightForFooterInSection:(NSInteger)section{
    return 0.01;
}

- (CGFloat)tableView:(UITableView *)tableView heightForHeaderInSection:(NSInteger)section{
    if (section == 0) {
        return 20;
    }else{
       return 10;
    }
   
}

- (UIView *)tableView:(UITableView *)tableView viewForHeaderInSection:(NSInteger)section{
    UIView *view = [[UIView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, 10)];
    if (section == 0) {
        view.frame = CGRectMake(0, 0, SCREEN_W, 20);
    }else{
      
    }
    view.backgroundColor = COLOR(249, 245, 245);
    return view;
}

- (UIView *)tableView:(UITableView *)tableView viewForFooterInSection:(NSInteger)section{
    UIView *view = [[UIView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, 0.1)];
    return view;
}

- (void)tableView:(UITableView *)tableView didSelectRowAtIndexPath:(NSIndexPath *)indexPath{
   
}

- (void)choose:(UIButton *)sender{
    sender.selected = !sender.selected;
    MessageModel *model = dataArr[sender.tag];
    model.Is = sender.selected;
}

@end
