//
//  PhotoDetailViewController.m
//  TheParty
//
//  Created by macmini on 2018/8/2.
//  Copyright © 2018年 macmini. All rights reserved.
//

#import "PhotoDetailViewController.h"
#import "PhotoDetailCollectionViewCell.h"
#import "UIImage+FEBoxBlur.h"
#import "HZPhotoBrowser.h"
@interface PhotoDetailViewController ()<UICollectionViewDelegate,UICollectionViewDataSource,UICollectionViewDelegateFlowLayout>
{
    UICollectionView *collection;
    NSDictionary *dataDic;
    NSArray *dataArr;
}

@end

@implementation PhotoDetailViewController

- (void)viewDidLoad {
    [super viewDidLoad];
    // Do any additional setup after loading the view.
    self.title = @"党建相册";
    dataArr =[[NSArray alloc] init];
    dataDic = [[NSDictionary alloc] init];
    [self CreateData];
   
}

- (void)CreateData{
    
    [self showHUD:nil];
    WEAKSELF
    NSString *biz=[NSString stringWithFormat:@"&id=%@",self.photoId];
    [ConnectionRequestMgr GetSessionWithUrl:PhotoDetail parameter:biz successBlock:^(NSDictionary *dict) {
     
        [weakSelf hideHUD];
        if ([dict[@"code"] integerValue] == 1) {
            dataDic = dict;
            dataArr  =dict[@"data"][@"data"][@"path"];
            [self CreateUI];
        }else{
            [weakSelf showError:dict[@"msg"]];
        }
    } failBlock:^(NSString *errorStr) {
        [weakSelf hideHUD];
        [weakSelf showError:errorStr];
    }];
    
}

- (void)CreateUI{
    UICollectionViewFlowLayout *layout=[[UICollectionViewFlowLayout alloc]init];
    layout.minimumInteritemSpacing = 16;
    layout.minimumLineSpacing = 15;
    layout.itemSize=CGSizeMake((SCREEN_W -48)/2, (103 *(SCREEN_W -48)/2)/161);  //设置每个单元格的大小
    layout.headerReferenceSize=CGSizeMake(self.view.frame.size.width, 195);
    //设置collectionView头视图的大小
    
    collection = [[UICollectionView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, SCREEN_H -48) collectionViewLayout:layout];
    collection.backgroundColor = [UIColor whiteColor];
    collection.delegate=self;
    collection.dataSource=self;
    collection.showsVerticalScrollIndicator = FALSE;
    collection.showsHorizontalScrollIndicator = FALSE;
    [self.view addSubview:collection];
    
    [collection registerNib:[UINib nibWithNibName:@"PhotoDetailCollectionViewCell" bundle:nil] forCellWithReuseIdentifier:@"PhotoDetailCollectionViewCell"];
    [collection registerClass:[UICollectionReusableView class] forSupplementaryViewOfKind:UICollectionElementKindSectionHeader withReuseIdentifier:@"Header"];
    
}

#pragma mark UICollectionView
-(NSInteger)collectionView:(UICollectionView *)collectionView numberOfItemsInSection:(NSInteger)section
{
    return dataArr.count;
}

//定义展示的Section的个数
-(NSInteger)numberOfSectionsInCollectionView:(UICollectionView *)collectionView
{
    return 1;
}

-(UICollectionViewCell*)collectionView:(UICollectionView *)collectionView cellForItemAtIndexPath:(NSIndexPath *)indexPath
{
    PhotoDetailCollectionViewCell *cell =  [collectionView dequeueReusableCellWithReuseIdentifier:@"PhotoDetailCollectionViewCell" forIndexPath:indexPath];
    [cell.imageV sd_setImageWithURL:[NSURL URLWithString:dataArr[indexPath.row]] placeholderImage:[UIImage imageNamed:@"photoLoading"]];
    return cell;
}

- (UICollectionReusableView *)collectionView:(UICollectionView *)collectionView viewForSupplementaryElementOfKind:(NSString *)kind atIndexPath:(NSIndexPath *)indexPath{
    UICollectionReusableView *headView = [collectionView dequeueReusableSupplementaryViewOfKind:UICollectionElementKindSectionHeader
                                                                            withReuseIdentifier:@"Header"
                                                                                   forIndexPath:indexPath];
    for (UIView *view in headView.subviews) {
        [view removeFromSuperview];
    }
    [headView addSubview:[self slideView]];
    return headView;
}

- ( UIEdgeInsets )collectionView:( UICollectionView *)collectionView layout:( UICollectionViewLayout *)collectionViewLayout insetForSectionAtIndex:( NSInteger )section {
    
    return UIEdgeInsetsMake (  0,16  , 20 , 16 );
    
}

- (void)collectionView:(UICollectionView *)collectionView didSelectItemAtIndexPath:(NSIndexPath *)indexPath{
    HZPhotoBrowser *browser = [[HZPhotoBrowser alloc] init];
    browser.isFullWidthForLandScape = YES;
    browser.isNeedLandscape = YES;
    browser.currentImageIndex = indexPath.row;
    browser.imageArray = [dataArr copy];
    [browser show];
    
}

- (UIView *)slideView{
    UIView *headview = [[UIView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, 195)];
    headview.backgroundColor = [UIColor whiteColor];
    

    
//    UIImage * sourceImage = [UIImage imageNamed:@"new_banner"];
//
//    CIImage * ciImage = [[CIImage alloc] initWithImage:sourceImage];
//
//    CIFilter * blurFilter = [CIFilter filterWithName:@"CIGaussianBlur"];
//    //将图片输入到滤镜中
//    [blurFilter setValue:ciImage forKey:kCIInputImageKey];
//    //设置模糊程度
//    [blurFilter setValue:@(6) forKey:@"inputRadius"];
//    //将处理之后的图片输出
//    CIImage * outCiImage = [blurFilter valueForKey:kCIOutputImageKey];
//    CIContext * context = [CIContext contextWithOptions:nil];
//    //获取CGImage句柄
//    CGImageRef outCGImageRef = [context createCGImage:outCiImage fromRect:[outCiImage extent]];
//    //获取到最终图片
//    UIImage * resultImage = [UIImage imageWithCGImage:outCGImageRef];
//    //释放句柄
//    CGImageRelease(outCGImageRef);
    UIImageView * imageV = [[UIImageView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, 180)];
//    [imageV setImage:resultImage];
    [imageV sd_setImageWithURL:[NSURL URLWithString:dataArr[0]] placeholderImage:[UIImage imageNamed:@"photoLoading"]];
    imageV.contentMode=UIViewContentModeScaleAspectFill;
//    imageV.image=[UIImage boxblurImage:imageV.image withBlurNumber:0.8];
    imageV.clipsToBounds=YES;
    [headview addSubview:imageV];
    
    UIBlurEffect *effect = [UIBlurEffect effectWithStyle:UIBlurEffectStyleExtraLight];
    UIVisualEffectView *effectView = [[UIVisualEffectView alloc] initWithEffect:effect];
    effectView.alpha = 0.6;
    effectView.frame = CGRectMake(0, 0, SCREEN_W, 180);
    [imageV addSubview:effectView];
    
    
    UIView *backView = [[UIView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, 180)];
    backView.backgroundColor = UIColorFromRGBA(0x000000, 0.5);
    [headview addSubview:backView];
    
    UILabel *titleL = [[UILabel alloc] initWithFrame:CGRectMake(16, 25, SCREEN_W -32, 40)];
    titleL.text = dataDic[@"data"][@"data"][@"name"];
    titleL.textColor = [UIColor whiteColor];
    titleL.font = FontBold(16);
    titleL.numberOfLines = 2;
    [backView addSubview:titleL];

    UILabel *subjectL = [[UILabel alloc] initWithFrame:CGRectMake(16, CGRectGetMaxY(titleL.frame) + 12, SCREEN_W -32, 40)];
    subjectL.text = dataDic[@"data"][@"data"][@"content"];
    subjectL.textColor = [UIColor whiteColor];
    subjectL.font = Font(12);
    subjectL.numberOfLines = 4;

    CGSize size = CGSizeMake(SCREEN_W -32, MAXFLOAT);//设置高度宽度的最大限度
    CGRect rect = [subjectL.text boundingRectWithSize:size options:NSStringDrawingUsesFontLeading|NSStringDrawingTruncatesLastVisibleLine|NSStringDrawingUsesLineFragmentOrigin attributes:@{NSFontAttributeName : [UIFont systemFontOfSize:12]} context:nil];
    CGFloat H;
    if (rect.size.height >65) {
        H = 65;
    }else{
        H = rect.size.height;
    }
    
    subjectL.frame = CGRectMake(16, CGRectGetMaxY(titleL.frame) + 12, SCREEN_W -32, H);
    [backView addSubview:subjectL];
    
    
    UILabel *downL = [[UILabel alloc] initWithFrame:CGRectMake(0, 150, SCREEN_W , 13)];
    downL.text = [NSString stringWithFormat:@"— %@张图片 —",dataDic[@"data"][@"count"]];
    downL.textColor = [UIColor whiteColor];
    downL.font = Font(13);
    downL.textAlignment = 1;
    [backView addSubview:downL];
    return headview;
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
