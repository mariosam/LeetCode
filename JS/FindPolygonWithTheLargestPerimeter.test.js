/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { largestPerimeter } from './FindPolygonWithTheLargestPerimeter.js'

TEST('Starting FindPolygonWithTheLargestPerimeter test...', (t) => {
    //Test 1
    let want = 15
    let got = largestPerimeter( [5,5,5] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 12
    got = largestPerimeter( [1,12,1,2,5,50,3] )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = -1
    got = largestPerimeter( [5,5,50] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
