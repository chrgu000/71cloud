//
//  ExamineDetailViewController.m
//  TheParty
//
//  Created by fuz-bmac on 2018/10/25.
//  Copyright © 2018年 macmini. All rights reserved.
//
typedef enum : NSUInteger {
    adTypeDefault = 0,
    adTypeImg,
    adTypeLabel,
} adType;

typedef enum : NSUInteger {
    NextTypeDefault = 0,
    NextTypeChoose,
    NextTypeNext,
} NextType;

#import <UIKit/UIKit.h>

@interface Find_QuestionNewCollectionViewCell : UICollectionViewCell<UITableViewDelegate,UITableViewDataSource>

@property (nonatomic,strong) UITableView * bodyView;
@property (nonatomic,strong) UIButton * nextB;
@property (nonatomic,assign) adType  type;

@property (nonatomic,assign) NextType NextT;

@property (nonatomic,assign) BOOL isSure;

@property (nonatomic,strong)  NSMutableDictionary * dataSource;
@property (nonatomic,strong)  NSMutableArray * answerArray;

@property (nonatomic,copy) void(^clickAnswerBlcok)(NSDictionary *dic);

@property (nonatomic,copy) void(^NextPush)(void);

@end


