/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { minScoreTriangulation } from './MinimumScoreTriangulationOfPolygon.js'

TEST('Starting MinimumScoreTriangulationOfPolygon test...', (t) => {
    //Test 1
    let want = 6
    let got = minScoreTriangulation( [1,2,3] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 144
    got = minScoreTriangulation( [3,7,4,5] )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 13
    got = minScoreTriangulation( [1,3,1,4,1,5] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
