/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { findMinArrowShots } from './MinimumNumberOfArrowsToBurstBalloons.js'

TEST('Starting MinimumNumberOfArrowsToBurstBalloons test...', (t) => {
    //Test 1
    let want = 2
    let got = findMinArrowShots( [[10,16],[2,8],[1,6],[7,12]] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 4
    got = findMinArrowShots( [[1,2],[3,4],[5,6],[7,8]] )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 2
    got = findMinArrowShots( [[1,2],[2,3],[3,4],[4,5]] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
