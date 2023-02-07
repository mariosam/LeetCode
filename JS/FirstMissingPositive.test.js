/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { firstMissingPositive } from './FirstMissingPositive.js'

TEST('Starting FirstMissingPositive test...', (t) => {
    //Test 1
    let want = 3
    let got = firstMissingPositive( [1,2,0] )
    t.assert( want === got, "Expect: 3")
    //Test 2
    want = 2
    got = firstMissingPositive( [3,4,-1,1] )
    t.assert( want === got, "Expect: 2")
    //Test 3
    want = 1
    got = firstMissingPositive( [7,8,9,11,12] )
    t.assert( want === got, "Expect: 1")
    //Test 4
    want = 2
    got = firstMissingPositive( [1,1] )
    t.assert( want === got, "Expect: 2")
    //Test 5
    want = 3
    got = firstMissingPositive( [0,2,2,1,1] )
    t.assert( want === got, "Expect: 3")
    //Test 6
    want = 2
    got = firstMissingPositive( [1] )
    t.assert( want === got, "Expect: 2")
    //Test 7
    want = 3
    got = firstMissingPositive( [2,1] )
    t.assert( want === got, "Expect: 3")
    //Test 8
    want = 1
    got = firstMissingPositive( [2] )
    t.assert( want === got, "Expect: 1")
    //Test 9
    want = 1
    got = firstMissingPositive( [-5] )
    t.assert( want === got, "Expect: 1")
    //Test 10
    want = 2
    got = firstMissingPositive( [1,1000] )
    t.assert( want === got, "Expect: 2")
    //Test 11
    want = 11
    got = firstMissingPositive( [1,2,3,4,5,6,7,8,9,10] )
    t.assert( want === got, "Expect: 11")
    //Test 12
    want = 2
    got = firstMissingPositive( [1,3,3] )
    t.assert( want === got, "Expect: 2")
    //Test 13
    want = 100
    got = firstMissingPositive( [99,94,96,11,92,5,91,89,57,85,66,63,84,81,79,61,74,78,77,30,64,13,58,18,70,69,51,12,32,34,9,43,39,8,1,38,49,27,21,45,47,44,53,52,48,19,50,59,3,40,31,82,23,56,37,41,16,28,22,33,65,42,54,20,29,25,10,26,4,60,67,83,62,71,24,35,72,55,75,0,2,46,15,80,6,36,14,73,76,86,88,7,17,87,68,90,95,93,97,98] )
    t.assert( want === got, "Expect: 100")
    //Test 14
    want = 128
    got = firstMissingPositive( [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127] )
    t.assert( want === got, "Expect: 128")

    t.end()
})
