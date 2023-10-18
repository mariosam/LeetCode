/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { uniquePathsWithObstacles } from './UniquePathsII.js'

TEST('Starting UniquePathsII test...', (t) => {
    //Test 1
    let want = 2
    let got = uniquePathsWithObstacles( [[0,0,0], [0,1,0], [0,0,0]] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 1
    got = uniquePathsWithObstacles( [[0,1], [0,0]] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
