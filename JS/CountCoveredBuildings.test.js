/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { countCoveredBuildings } from './CountCoveredBuildings.js'

TEST('Starting CountCoveredBuildings test...', (t) => {
    //Test 1
    let want = 1
    let got = countCoveredBuildings( 3, [[1,2],[2,2],[3,2],[2,1],[2,3]] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 0
    got = countCoveredBuildings( 3, [[1,1],[1,2],[2,1],[2,2]] )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 1
    got = countCoveredBuildings( 5, [[1,3],[3,2],[3,3],[3,5],[5,3]] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
