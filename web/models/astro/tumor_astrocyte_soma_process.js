MODELS['tumor_astrocyte_soma_process.obj'] = {
  materials: {
    'obj1_nuclear_outer_membrane': {
      Ka: [0, 35, 66],
      Kd: [0, 89, 165],
      Ks: [0, 44, 82],
      Ns: 15.686300,
      d: 94
    },
    'obj2_mitochondrial_membrane_outer': {
      Ka: [59, 0, 102],
      Kd: [149, 0, 255],
      Ks: [74, 0, 126],
      Ns: 15.686300,
      d: 40
    },
    'obj3_cellular_membrane': {
      Ka: [85, 102, 102],
      Kd: [212, 255, 255],
      Ks: [106, 126, 126],
      Ns: 15.686300,
      d: 193
    }
  },
  decodeParams: {
    decodeOffsets: [-8191,-3742,-6481,0,0,-511,-511,-511],
    decodeScales: [0.013953525, 0.013953525, 0.013953525, 0.000978, 0.000978, 0.001957, 0.001957, 0.001957]
  },
  urls: {
    '6fbd3f8f.tumor_astrocyte_soma_process.utf8': [
      { material: 'obj1_nuclear_outer_membrane',
        attribRange: [0, 35667],
        indexRange: [285336, 71294],
        bboxes: 499218,
        names: ['obj1_nuclear_outer_membrane'],
        lengths: [213882]
      }
    ],
    '293d29ff.tumor_astrocyte_soma_process.utf8': [
      { material: 'obj2_mitochondrial_membrane_outer',
        attribRange: [0, 55294],
        indexRange: [442352, 110492],
        bboxes: 967246,
        names: ['obj2_mitochondrial_membrane_outer'],
        lengths: [331476]
      },
      { material: 'obj2_mitochondrial_membrane_outer',
        attribRange: [773828, 13861],
        indexRange: [884716, 27510],
        bboxes: 967252,
        names: ['obj2_mitochondrial_membrane_outer'],
        lengths: [82530]
      }
    ],
    'e61f7da1.tumor_astrocyte_soma_process.utf8': [
      { material: 'obj3_cellular_membrane',
        attribRange: [0, 55294],
        indexRange: [442352, 108062],
        bboxes: 2175194,
        names: ['obj3_cellular_membrane'],
        lengths: [324186]
      },
      { material: 'obj3_cellular_membrane',
        attribRange: [766538, 55294],
        indexRange: [1208890, 107733],
        bboxes: 2175200,
        names: ['obj3_cellular_membrane'],
        lengths: [323199]
      },
      { material: 'obj3_cellular_membrane',
        attribRange: [1532089, 46727],
        indexRange: [1905905, 89763],
        bboxes: 2175206,
        names: ['obj3_cellular_membrane'],
        lengths: [269289]
      }
    ]
  }
};
