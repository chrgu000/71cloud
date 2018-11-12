//
//  ExamineDetailViewController.m
//  TheParty
//
//  Created by fuz-bmac on 2018/10/25.
//  Copyright © 2018年 macmini. All rights reserved.
//

#import "ExamineDetailViewController.h"
#import "ExamineStatusViewController.h"
#import "Find_QuestionNewCollectionViewCell.h"
#import "ExaminePerformanceViewController.h"
#import "ExamineViewController.h"

@interface ExamineDetailViewController ()<UICollectionViewDelegate,UICollectionViewDataSource>
{
    NSTimer *countDownTimer;
    NSInteger secondsCountDown;
    UILabel *timeL;
    UICollectionView * collectionV;
    UICollectionViewFlowLayout * flowLayout;
    NSMutableArray *dataSource;
    int readNum;
    UILabel *rightL;
}
@end

@implementation ExamineDetailViewController

- (void)viewDidLoad {
    [super viewDidLoad];
    // Do any additional setup after loading the view.
    self.title = @"答题";
    self.view.backgroundColor = COLOR(245, 245, 245);
    
    self.navigationItem.leftBarButtonItem = [[UIBarButtonItem alloc] initWithImage:[[UIImage imageNamed:@"back"] imageWithRenderingMode:UIImageRenderingModeAlwaysOriginal] style:UIBarButtonItemStylePlain target:self action:@selector(back_action)];
    
    readNum = 0;
    dataSource = [[NSMutableArray alloc] init];
    for (int i=0; i< [self.dict[@"text"] count]; i++) {
        NSDictionary * dic = @{@"qid":[NSString stringWithFormat:@"%@",self.dict[@"text"][i][@"id"]],
                               @"qcontent":[NSString stringWithFormat:@"%@",self.dict[@"text"][i][@"content"]],
                               @"qchoose":self.dict[@"text"][i][@"opt"],
                               @"ranswer":self.dict[@"text"][i][@"answer_k"],
                               @"chooseanser":@"0",
                               @"sure":self.dict[@"text"][i][@"answer_v"],
                               @"isShouldAnswer":i == 0 ? @"1" : @"0",@"lastTime":[NSString stringWithFormat:@"%zd",[self.dict[@"text"] count] -i]
                               };
        [dataSource addObject:dic];
    }
    [self loadBodyView];
    [self createTopView];
    [self createDownView];
}

-(void)loadBodyView{
        flowLayout = [[UICollectionViewFlowLayout alloc]init];
        flowLayout.itemSize = CGSizeMake(SCREEN_W, SCREEN_H - 64 - 44 -50);
        flowLayout.scrollDirection = UICollectionViewScrollDirectionHorizontal;
        flowLayout.minimumLineSpacing = 0;
        flowLayout.minimumInteritemSpacing = 0;
    
        collectionV = [[UICollectionView alloc]initWithFrame:CGRectMake(0, 50, SCREEN_W, SCREEN_H  - 64 - 44 -50) collectionViewLayout:flowLayout];
        collectionV.showsVerticalScrollIndicator = NO;
        collectionV.showsHorizontalScrollIndicator = NO;
        collectionV.bounces = NO;
        collectionV.scrollEnabled = NO;
        collectionV.backgroundColor = COLOR(245, 245, 245);
        collectionV.pagingEnabled = YES;
        collectionV.delegate = self;
        collectionV.dataSource = self;
        [collectionV registerClass:[Find_QuestionNewCollectionViewCell class] forCellWithReuseIdentifier:@"Find_QuestionNewCollectionViewCell"];
        [self.view addSubview:collectionV];
}

- (void)createTopView{
    UIView *TopView = [[UIView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, 50)];
    TopView.backgroundColor = [UIColor whiteColor];
    [self.view addSubview:TopView];

    UILabel *titleL = [[UILabel alloc] initWithFrame:CGRectMake(16, 18.5, 150, 15)];
    titleL.text = @"单项选择题";
    titleL.textColor = COLOR(51, 51, 51);
    titleL.font = Font(15);
    [TopView addSubview:titleL];
    
    rightL = [[UILabel alloc] initWithFrame:CGRectMake(SCREEN_W - 70, 18.5, 54, 15)];
    rightL.textAlignment =2;
    rightL.textColor = COLOR(51, 51, 51);
    rightL.font = Font(13);
    rightL.attributedText = [self title:[NSString stringWithFormat:@"1/%zd",[self.dict[@"text"]  count]] andchanggeText:@"1"];
    [TopView addSubview:rightL];
    
    UILabel *line = [[UILabel alloc] initWithFrame:CGRectMake(16, 49, SCREEN_W -32, 1)];
    line.backgroundColor = COLOR(230, 230, 230);
    [TopView addSubview:line];
    
}

- (void)createDownView{
    
    UIView *downView = [[UIView alloc] initWithFrame:CGRectMake(0, SCREEN_H - 44 -64, SCREEN_W, 44)];
    downView.backgroundColor = [UIColor whiteColor];
    [self.view addSubview:downView];
    
    UILabel *line  =[[UILabel alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, 0.5)];
    line.backgroundColor = COLOR(230, 230, 230);
    [downView addSubview:line];
    
    UIButton *statusB = [UIButton buttonWithType:UIButtonTypeCustom];
    statusB.frame = CGRectMake(40, 9, 25, 25);
    [statusB setImage:[UIImage imageNamed:@"Answer_status"] forState:UIControlStateNormal];
    [statusB addTarget:self action:@selector(actionStatu) forControlEvents:UIControlEventTouchUpInside];
    [downView addSubview:statusB];
    
    UILabel *titleL = [[UILabel alloc] initWithFrame:CGRectMake(CGRectGetMaxX(statusB.frame), 12,SCREEN_W -120-CGRectGetMaxX(statusB.frame), 20)];
    titleL.text = [NSString replaceStringNull:self.dict[@"exam_activity_name"]];
    titleL.font = Font(14);
    titleL.textColor = COLOR(51, 51, 51);
    titleL.textAlignment = 1;
    [downView addSubview:titleL];
    
    UIImageView *timeV = [[UIImageView alloc] initWithFrame:CGRectMake(SCREEN_W -120, 12, 20, 20)];
    timeV.image =[UIImage imageNamed:@"Answer_time"];
    [downView addSubview:timeV];
    
    timeL = [[UILabel alloc] initWithFrame:CGRectMake(SCREEN_W -90, 12, 65, 20)];
    timeL.font = Font(14);
    timeL.textColor = COLOR(51, 51, 51);
    timeL.textAlignment = 1;
    [downView addSubview:timeL];

     secondsCountDown = [self.dict[@"long_time"] integerValue];//倒计时秒数
     countDownTimer = [NSTimer scheduledTimerWithTimeInterval:1 target:self selector:@selector(countDownAction) userInfo:nil repeats:YES];
    //启动倒计时后会每秒钟调用一次方法 countDownAction
    //设置倒计时显示的时间
    NSString *str_hour = [NSString stringWithFormat:@"%02ld",secondsCountDown/3600];//时
    NSString *str_minute = [NSString stringWithFormat:@"%02ld",(secondsCountDown%3600)/60];//分
    NSString *str_second = [NSString stringWithFormat:@"%02ld",secondsCountDown%60];//秒
    NSString *format_time = [NSString stringWithFormat:@"%@:%@:%@",str_hour,str_minute,str_second];
    NSLog(@"time:%@",format_time);
    timeL.text = format_time;
}

-(void) countDownAction{
    //倒计时-1
    secondsCountDown--;
    NSString *str_hour = [NSString stringWithFormat:@"%02ld",secondsCountDown/3600];
    NSString *str_minute = [NSString stringWithFormat:@"%02ld",(secondsCountDown%3600)/60];
    NSString *str_second = [NSString stringWithFormat:@"%02ld",secondsCountDown%60];
    NSString *format_time = [NSString stringWithFormat:@"%@:%@:%@",str_hour,str_minute,str_second];
    //修改倒计时标签现实内容
    timeL.text=[NSString stringWithFormat:@"%@",format_time];
    //当倒计时到0时，做需要的操作，比如验证码过期不能提交
    if(secondsCountDown==0){
        [countDownTimer invalidate];
        NSLog(@"over");
    }
    
}

- (void)actionStatu{
    
    [[UIHelper sharedSingleton] pushVC:@"ExamineStatusViewController" vc:self parames:@{@"dataArr":[dataSource copy]}];
    
}

#pragma mark - delegate && data source
-(NSInteger)numberOfSectionsInCollectionView:(UICollectionView *)collectionView{
    return 1;
}
-(NSInteger)collectionView:(UICollectionView *)collectionView numberOfItemsInSection:(NSInteger)section{
    return dataSource.count;
}
- (UICollectionViewCell *)collectionView:(UICollectionView *)collectionView cellForItemAtIndexPath:(NSIndexPath *)indexPath{
    MJWeakSelf
    Find_QuestionNewCollectionViewCell * cell = [collectionView dequeueReusableCellWithReuseIdentifier:@"Find_QuestionNewCollectionViewCell" forIndexPath:indexPath];
    if (!cell) {
        cell = [[Find_QuestionNewCollectionViewCell alloc]init];
    }
    cell.dataSource = dataSource[indexPath.item];
    cell.clickAnswerBlcok = ^(NSDictionary *dic) {
        [weakSelf dealWithLocalData:dic index:indexPath.item];
    };
    cell.NextPush =^(void) {
        [weakSelf pushNext];
    };
    return cell;
}

#pragma mark - custom method

-(void)dealWithLocalData:(NSDictionary *)dic index:(NSInteger)index{
    
    [dataSource replaceObjectAtIndex:index withObject:dic];
    if (index + 1 == dataSource.count) {
        NSLog(@"over");
    }
    else{
        NSMutableDictionary * mdic = [NSMutableDictionary dictionaryWithDictionary:dataSource[index + 1]];
        [mdic setValue:@"1" forKey:@"isShouldAnswer"];
        [dataSource replaceObjectAtIndex:index + 1 withObject:mdic];
    }
    
    [[NSUserDefaults standardUserDefaults] setObject:dataSource forKey:@"question"];
    [[NSUserDefaults standardUserDefaults] synchronize];
    
    [collectionV reloadItemsAtIndexPaths:@[[NSIndexPath indexPathForItem:index inSection:0]]];
    
}
-(void)pushNext{

    if (readNum+1 == dataSource.count) {
        NSMutableArray *Arr = [[NSMutableArray alloc] init];
        for (int i = 0; i<[dataSource count]; i++) {
                NSMutableDictionary *dic = [[NSMutableDictionary alloc] init];
                [dic setValue:dataSource[i][@"chooseanser"] forKey:@"dir"];
                [dic setValue:dataSource[i][@"qid"] forKey:@"str"];
                [Arr addObject:dic];
        }
            [self showHUD:nil];
            WEAKSELF
            NSDictionary *biz = @{@"paper_id":self.paper_id,@"activity_id":self.activity_id,@"arr":Arr,@"use_time": @([self.dict[@"long_time"] integerValue]-secondsCountDown)};
            [ConnectionRequestMgr POSTSessionWithUrl:examapiTranscript parameter:biz successBlock:^(NSDictionary *dict) {
                [weakSelf hideHUD];
                if ([dict[@"code"] integerValue] == 1) {
                    [[UIHelper sharedSingleton] pushVC:@"ExaminePerformanceViewController" vc:self parames:@{@"activity_id":self.activity_id,@"dict":dict[@"data"]}];
                }else{
                    [weakSelf showError:dict[@"msg"]];
                }
            } failBlock:^(NSString *errorStr) {
                [weakSelf hideHUD];
                [weakSelf showError:errorStr];
            }];
    }else{
        readNum++;
        NSLog([NSString stringWithFormat:@"%ld",readNum]);
        rightL.attributedText = [self title:[NSString stringWithFormat:@"%zd/%zd",readNum +1,[self.dict[@"text"]  count]] andchanggeText:[NSString stringWithFormat:@"%ld",readNum +1]];
        [collectionV scrollToItemAtIndexPath:[NSIndexPath indexPathForItem:readNum inSection:0] atScrollPosition:UICollectionViewScrollPositionCenteredHorizontally animated:NO];
    }

//    _currentCell = _readNum;
    
}

#pragma mark Toast

-(void)showToastContent:(NSString *)content{
//    ToastView * item = [[ToastView alloc]initWithType:ToastLocationBottom content:content presentView:self.view delay:2.5 block:^{}];
//    [item show];
}
//

- (NSMutableAttributedString *)title:(NSString *)str andchanggeText:(NSString *)string{
    NSMutableAttributedString *hintString=[[NSMutableAttributedString alloc]initWithString:str];
    //获取要调整颜色的文字位置,调整颜色
    NSRange range1=[[hintString string]rangeOfString:string];
    [hintString addAttribute:NSForegroundColorAttributeName value:[UIColor redColor] range:range1];
    [hintString addAttribute:NSFontAttributeName value:[UIFont systemFontOfSize:13] range:range1];
    return hintString;
}


- (void)back_action{
    UIAlertController *alertController = [UIAlertController alertControllerWithTitle:@"提示" message:@"你正在进行关卡答题，确认要退出？" preferredStyle:UIAlertControllerStyleAlert];
    UIAlertAction *cancelAction = [UIAlertAction actionWithTitle:@"取消" style:UIAlertActionStyleCancel handler:nil];
    UIAlertAction *okAction = [UIAlertAction actionWithTitle:@"确定" style:UIAlertActionStyleDefault handler:^(UIAlertAction * _Nonnull action) {
        for (UIViewController *controller in self.navigationController.viewControllers) {
            if ([controller isKindOfClass:[ExamineViewController class]]) {
                [self.navigationController popToViewController:controller animated:YES];
            }
        }
    }];
    
    [alertController addAction:cancelAction];
    [alertController addAction:okAction];
    [self presentViewController:alertController animated:YES completion:nil];
    
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
